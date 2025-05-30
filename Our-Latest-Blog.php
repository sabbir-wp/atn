<?php

// Register Custom Post Type Our Latest Blog
function create_ourlatestblog_cpt() {

	$labels = array(
		'name' => _x( 'blog', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Our Latest Blog', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'blog', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Our Latest Blog', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Our Latest Blog Archives', 'textdomain' ),
		'attributes' => __( 'Our Latest Blog Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Our Latest Blog:', 'textdomain' ),
		'all_items' => __( 'All blog', 'textdomain' ),
		'add_new_item' => __( 'Add New Our Latest Blog', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Our Latest Blog', 'textdomain' ),
		'edit_item' => __( 'Edit Our Latest Blog', 'textdomain' ),
		'update_item' => __( 'Update Our Latest Blog', 'textdomain' ),
		'view_item' => __( 'View Our Latest Blog', 'textdomain' ),
		'view_items' => __( 'View blog', 'textdomain' ),
		'search_items' => __( 'Search Our Latest Blog', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Our Latest Blog', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Our Latest Blog', 'textdomain' ),
		'items_list' => __( 'blog list', 'textdomain' ),
		'items_list_navigation' => __( 'blog list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter blog list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Our Latest Blog', 'textdomain' ),
		'description' => __( 'Our Latest Blog', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'editor', 'thumbnail', 'author', 'custom-fields'),
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
	register_post_type( 'ourlatestblog', $args );

}
add_action( 'init', 'create_ourlatestblog_cpt', 0 );




?>