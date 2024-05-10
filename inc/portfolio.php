<?php

// Register Custom Post Type portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'portfolios', 'Post Type General Name', 'lamoda-theme' ),
		'singular_name' => _x( 'portfolio', 'Post Type Singular Name', 'lamoda-theme' ),
		'menu_name' => _x( 'portfolios', 'Admin Menu text', 'lamoda-theme' ),
		'name_admin_bar' => _x( 'portfolio', 'Add New on Toolbar', 'lamoda-theme' ),
		'archives' => __( 'portfolio Archives', 'lamoda-theme' ),
		'attributes' => __( 'portfolio Attributes', 'lamoda-theme' ),
		'parent_item_colon' => __( 'Parent portfolio:', 'lamoda-theme' ),
		'all_items' => __( 'All portfolios', 'lamoda-theme' ),
		'add_new_item' => __( 'Add New portfolio', 'lamoda-theme' ),
		'add_new' => __( 'Add New', 'lamoda-theme' ),
		'new_item' => __( 'New portfolio', 'lamoda-theme' ),
		'edit_item' => __( 'Edit portfolio', 'lamoda-theme' ),
		'update_item' => __( 'Update portfolio', 'lamoda-theme' ),
		'view_item' => __( 'View portfolio', 'lamoda-theme' ),
		'view_items' => __( 'View portfolios', 'lamoda-theme' ),
		'search_items' => __( 'Search portfolio', 'lamoda-theme' ),
		'not_found' => __( 'Not found', 'lamoda-theme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'lamoda-theme' ),
		'featured_image' => __( 'Featured Image', 'lamoda-theme' ),
		'set_featured_image' => __( 'Set featured image', 'lamoda-theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'lamoda-theme' ),
		'use_featured_image' => __( 'Use as featured image', 'lamoda-theme' ),
		'insert_into_item' => __( 'Insert into portfolio', 'lamoda-theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this portfolio', 'lamoda-theme' ),
		'items_list' => __( 'portfolios list', 'lamoda-theme' ),
		'items_list_navigation' => __( 'portfolios list navigation', 'lamoda-theme' ),
		'filter_items_list' => __( 'Filter portfolios list', 'lamoda-theme' ),
	);
	$args = array(
		'label' => __( 'portfolio', 'lamoda-theme' ),
		'description' => __( '', 'lamoda-theme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-align-right',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );