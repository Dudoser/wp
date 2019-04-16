<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
add_action('after_setup_theme', 'my_menu');

function my_menu() {
	register_nav_menu('top', 'меню в шапке');
}



function my_scripts_method(){
	wp_enqueue_script( 'jquery' );
}

function style_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('default', get_template_directory_uri().'/assets/css/default.css');
	wp_enqueue_style('layout', get_template_directory_uri().'/assets/css/layout.css');
	wp_enqueue_style('media-queries', get_template_directory_uri().'/assets/css/media-queries.css');
}

function scripts_theme() {
	wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js');
	wp_enqueue_script('doubletaptogo', get_template_directory_uri().'/assets/js/doubletaptogo.js');
	wp_enqueue_script('flexslider', get_template_directory_uri().'/assets/js/jquery.flexslider.js');
	wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js');
}

