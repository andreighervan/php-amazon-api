<?php
$title_slide=get_field('title_slide');
$image_slide=get_field('image_slide');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foodomni</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/css/animate.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

</head>
<style>
    header{
        background:linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('<?php echo $image_slide['url'];?>');
		backgroud-size:cover;
    }
</style>
<body>
<header>
 <nav>

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img src="<?php bloginfo('stylesheet_directory');?>/img/logo.png" class="logo"></a>
            </div>
            <div class="collapse navbar-collapse right-navigation main-nav" id="navbar">
             <?php  wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav navbar-nav navbar-right nav-top'
                )); ?>
            </div>
        </div>
    </nav>

   <div class="container">
    <div class="hero-text-box">
        <h1><?php echo $title_slide;?></h1>
        <a href="#" class="btn btn-full js-scroll-to-plan">I'm hungry</a>
        <a href="#" class="btn btn-ghost js-scroll-to-start">Show me more</a>
    </div>
	</div>
</header>