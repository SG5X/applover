<?php

function theme_resources(){
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	/* wp_register_script('numbers', get_theme_file_uri() . '/js/numbers.js');
	wp_enqueue_script('numbers'); */
}

add_action('wp_enqueue_scripts', 'theme_resources');


function articles_post_type(){
	register_post_type('articles', array(
	'public' => true,
	'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
	'show_in_rest' => true,
	'has_archive' => true,
	'menu_icon' => 'dashicons-welcome-add-page',
	'labels' => array(
	'name' => 'Artykuły',
	'add_new' => 'Dodaj artykuł',
	'add_new_item' => 'Dodaj artykuł',
	'all_items' => 'Zobacz wszystkie',
	'edit_item' => 'Edytuj artykuł',
	'view_item' => 'Zobacz artykuł',
	'view_items' => 'Zobacz artykuły')
	));
}

add_action('init', 'articles_post_type');

function theme_features(){
	register_nav_menu('fooMenu', 'Footer Menu');
	register_nav_menu('headerMenu', 'Header Menu');
	add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'theme_features')


?>