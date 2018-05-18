<?php

function wpdemo_enqueue(){

    wp_register_style('wpdemo_bootstrap',get_template_directory_uri().'./css/bootstrap.min.css');
    wp_enqueue_style('wpdemo_bootstrap');
    wp_register_style('wpdemo_responsive',get_template_directory_uri().'./css/responsive.css');
    wp_enqueue_style('wpdemo_responsive');
    wp_enqueue_style( 'wp_demo-style', get_stylesheet_uri() );
    wp_enqueue_script('jquery');
    wp_register_script('wpdemo_bootstrap',get_template_directory_uri().'./js/bootstrap.min.js',array(),false,true);
    wp_enqueue_script('wpdemo_bootstrap');
   
}