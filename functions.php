<?php

//Stylesheets 
function toms_theme_enqueue_styles() {
    wp_enqueue_style( 'media-style', get_stylesheet_directory_uri() . '/style/reset.css' );
    wp_enqueue_style( 'toms-theme-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'toms_theme_enqueue_styles' );

function theme_setup() {
  /* Nav menus support*/
    register_nav_menus(array(
        'header_navbar' => __('Header Navigation Menu', 'byteberry-awesome-theme'),
    ));
}
add_action('after_setup_theme', 'theme_setup');


?>