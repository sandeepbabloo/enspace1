<?php 
add_action( 'wp_enqueue_scripts', 'blogzen_theme_css',20);
function blogzen_theme_css() {
	wp_enqueue_style( 'blogzen-parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'blogzen-slateblue-style',get_stylesheet_directory_uri() . '/css/slateblue.css');
	wp_enqueue_script('blogzen-isotope-js', get_stylesheet_directory_uri() . '/js/isotope.pkgd.js');
	wp_enqueue_script('blogzen-main-js', get_stylesheet_directory_uri() . '/js/main.js');
}