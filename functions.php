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
