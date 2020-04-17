<?php

/*
* Register Theme Widget Area
*
* @return void
*/

function mbt_widgets_init() {
    // Primary sidebar
    register_sidebar([
		'name'			=> 'Primary Sidebar',
		'id'			=> 'primary-sidebar',
		'before_widget'	=> '<aside id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</aside>',
		'before_title'	=> '<h1 class="widget-title">',
		'after_title'	=> '</h1>',
    ]);
    
    // Footer Widget Area
    register_sidebar([
        'name'          =>  'Footer Area',
        'id'            =>  'footer-widgets',
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

/**
 * Theme Setup Declaration
 */

function mbt_theme_setup() {
    // Add support for Featured Images

    // Set Image Size for blog thumbnail

    // Add support for custom logo
    add_theme_support('custom-logo', [
        'height'        =>  40,
        'width'         => 200,
        'flex-height'   => false,
        'flex-width'    => true,
        'header-text'   => ['site-title', 'site-description'],
    ]);
}

add_action('after_setup_theme', 'mbt_theme_setup');

/* 
* Function for displaying the custom logo
*/

function mbt_the_custom_logo() {
    // get logo media id
    $custom_logo_id = get_theme_mod('custom_logo');

    // get URL to logo
    $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

    // Do we have custom logo?
    if  (has_custom_logo()) {
        // yes we have custom logo, pls display
        echo '<img src="' . $logo_url[0] . '" class="img-fluid" alt="Site Logo" title="' . get_bloginfo('name') . '">';
    }   else    {
        // we have no logo, show us the title instead
        bloginfo('name');
    }
}