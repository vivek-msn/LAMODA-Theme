<?php

// Enqueue main stylesheet function 

function lamod_theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'lamod_theme_scripts');

function lamod_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size( 'home-featured', 680,400,array('center','center'));
    add_image_size( 'single-img', 600,550, array('center','center'));
    add_theme_support('automatic-feed-links');
    
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'lamod') 
    ) );

};

add_action('after_setup_theme', 'lamod_theme_setup' );

?>