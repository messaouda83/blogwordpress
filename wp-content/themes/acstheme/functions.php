<?php 
//Load stylesheet
function load_css(){

    wp_register_style('bootstrap', get_template_directory_uri () . '/css/bootstrap-min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('main', get_template_directory_uri () . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');


}
add_action('wp_enqueue_scripts', 'load_css');

//Load javascript
function load_js(){
    wp_enqueue_style('jquery');
    wp_register_style('bootstrap', get_template_directory_uri () . '/js/bootstrap-min.js', 'jquery', false, true);
    wp_enqueue_style('bootstrap');


}
add_action('wp_enqueue_scripts', 'load_js');
//Theme options
add_theme_support('menus');
//Menu
register_nav_menus(

    array('top-menu' => 'top menu Location ', 
         'mobile-menu' => 'mobile menu Location ', 
    )
);