<?php

add_theme_support('post-thumbnails');
add_theme_support('custom-header');

// Active la page option dans ACF
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Creation d'image via wordpress
// add_image_size( 'feat', 255, 329, true);

// Create Navigation Menu
if (function_exists('register_nav_menu'))
{
    register_nav_menu('header_menu', 'Header Menu');
}

// Widget 
// function arphabet_widgets_init() {

// 	register_sidebar( array(
// 			'name'          => 'Colonne de droite',
// 			'id'            => 'right_col',
// 			'before_widget' => '<div>',
// 			'after_widget'  => '</div>',
// 	) );

// }
// add_action( 'widgets_init', 'arphabet_widgets_init' );


// Custom Post Type

