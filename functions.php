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

function lamoda_theme_widgets() {
    register_sidebar( array(
        'name' => __('Lamoda Theme Footer copyright sidebar', 'lamoda-theme'),
        'id'    => 'footer-1',
        'description' => __('Drag and Drop your widgets here', 'lamoda-theme'),
        'before_widgets' => '<div id="%1$s"  class="widget %2$s">',
        'after_widgets' => '</div>' ,
        'before_title' => '<h4 class="widget-title">',
        'after_title'   => '</h4>,'
    ) );

    register_sidebar( array(
        'name' => __('Lamoda Theme Social icon Footer', 'lamoda-theme'),
        'id'    => 'footer-2',
        'description' => __('Drag and Drop your widgets here', 'lamoda-theme'),
        'before_widgets' => '<div id="%1$s"  class="widget %2$s">',
        'after_widgets' => '</div>' ,
        'before_title' => '<h4 class="widget-title">',
        'after_title'   => '</h4>,'
    ) );
}

add_action( 'widgets_init', 'lamoda_theme_widgets');
?>