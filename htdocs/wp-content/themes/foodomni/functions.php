<?php

// set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5',array('search-form'));
add_theme_support('post-formats',array('link','quote','video'));
//actions & filters

add_action('wp_enqueue_scripts','wpdemo_enqueue');
add_action('after_switch_theme','wpdemo_activate');
add_action('after_setup_theme','wpdemo_setup_theme');
add_action('admin_menu','wpdemo_admin_menu');
add_action('admin_init','wpdemo_admin_init');
// includes
include (get_template_directory().'/include/front/enqueue.php');
include (get_template_directory().'/include/front/head.php');
include (get_template_directory().'/include/setup.php');
include (get_template_directory().'/include/activate.php');
include (get_template_directory().'/include/admin/menus.php');
include (get_template_directory().'/include/admin/options-page.php');
include (get_template_directory().'/include/admin/init.php');
include (get_template_directory().'/include/process/save-options.php');
//shortcodes
