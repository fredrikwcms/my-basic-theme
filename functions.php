<?php

/*
* Register Theme Widget Area
*
* @return void
*/

function mbt_widgets_init() {
    register_sidebar([
		'name'			=> 'Primary Sidebar',
		'id'			=> 'primary-sidebar',
		'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h1 class="widget-title">',
		'after_title'	=> '</h1>',
	]);
}
add_action('widgets_init', 'mbt_widgets_init');

/* 
* Register our main menu
*/

require('inc/bs4navwalker.php');

function mbt_register_menus() {
    register_nav_menus([
        'main-menu' => 'Main Menu',
    ]);
}
add_action('init', 'mbt_register_menus');

/* 
*   Register scripts and styles for our theme
*
*   @return void
*/

function mbt_register_scripts_and_styles()  {
    /* Styles */

    // Add Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '4.4.1', 'all');

    // Add Theme CSS
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', ['bootstrap']);

    // Additional CSS
    wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/assets/css/theme.css', ['bootstrap', 'style']);

    /* Scripts */

    // Remove WordPress jQuery
    wp_deregister_script('jquery');

    // Add jQuery
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js', [], '3.5.0', true);
}

add_action('wp_enqueue_scripts', 'mbt_register_scripts_and_styles');