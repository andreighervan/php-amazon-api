<?php
require 'vendor/autoload.php';

use Respect\Validation\Validator as v;

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

$access_key = 'AKIAIJA7W7PCDWFADUSQ';
$secret_key = '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';
$associate_tag = 'mystore0523f-20';

$amazon = new Lib\Amazon($access_key, $secret_key, $associate_tag);
$search_indices = $amazon->getSearchIndices();

$items = [];
$keyword = '';
$search_index = '';
$has_searched = false;

if (!empty($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $search_index = $_GET['search_index'];
  $has_searched = true;

  $keyword_validator = v::alnum()
    ->noWhitespace()
    ->length(3, 80);
  if ($keyword_validator->validate($_GET['keyword']) && in_array($search_index, $search_indices)) {
    $response = $amazon->itemSearch($keyword, $search_index);
    $items = $response->Items->Item;
  } 
}

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, [
  'cache' => 'cache',
  'auto_reload' => true
]);

$selected_filter = new Twig_SimpleFilter('selected', function ($string) {
  $exploded_string =  explode(',', $string);
  $selected_value = $exploded_string[0];
  $current_value = $exploded_string[1];
  return ($selected_value == $current_value) ? 'selected' : '';
});

$twig->addFilter($selected_filter);

$template = $twig->loadTemplate('index.html');
echo $template->render([
  'app_title' => getenv('APP_TITLE'),
  'search_indices' => $search_indices,
  'keyword' => $keyword,
  'search_index' => $search_index,
  'items' => $items,
  'has_searched' => $has_searched
]);