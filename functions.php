<?php

//Stylesheets 
function toms_theme_enqueue_styles() {
  wp_enqueue_style( 'toms-theme-style', get_stylesheet_uri() );
  wp_enqueue_style( 'media-style', get_stylesheet_directory_uri() . '/styles/reset.css' );
}

add_action( 'wp_enqueue_scripts', 'toms_theme_enqueue_styles' );



?>