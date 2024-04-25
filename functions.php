<?php

// Enqueue main stylesheet function 

function lamod_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'lamod_theme_scripts');

function lamod_theme_setup(){

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'lamod') 
    ) );

};

add_action('after_setup_theme', 'lamod_theme_setup' );

?>