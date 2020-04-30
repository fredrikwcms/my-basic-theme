<?php 

function cptui_register_my_cpts() {

	/**
	 * Post Type: FAQ's.
	 */

	$labels = [
		"name" => __( "FAQ's", "my-basic-theme" ),
		"singular_name" => __( "FAQ", "my-basic-theme" ),
		"menu_name" => __( "My FAQ's", "my-basic-theme" ),
		"all_items" => __( "All FAQ's", "my-basic-theme" ),
		"add_new" => __( "Add new", "my-basic-theme" ),
		"add_new_item" => __( "Add new FAQ", "my-basic-theme" ),
		"edit_item" => __( "Edit FAQ", "my-basic-theme" ),
		"new_item" => __( "New FAQ", "my-basic-theme" ),
		"view_item" => __( "View FAQ", "my-basic-theme" ),
		"view_items" => __( "View FAQ's", "my-basic-theme" ),
		"search_items" => __( "Search FAQ's", "my-basic-theme" ),
		"not_found" => __( "No FAQ's found", "my-basic-theme" ),
		"not_found_in_trash" => __( "No FAQ's found in trash", "my-basic-theme" ),
		"parent" => __( "Parent FAQ:", "my-basic-theme" ),
		"featured_image" => __( "Featured image for this FAQ", "my-basic-theme" ),
		"set_featured_image" => __( "Set featured image for this FAQ", "my-basic-theme" ),
		"remove_featured_image" => __( "Remove featured image for this FAQ", "my-basic-theme" ),
		"use_featured_image" => __( "Use as featured image for this FAQ", "my-basic-theme" ),
		"archives" => __( "FAQ archives", "my-basic-theme" ),
		"insert_into_item" => __( "Insert into FAQ", "my-basic-theme" ),
		"uploaded_to_this_item" => __( "Upload to this FAQ", "my-basic-theme" ),
		"filter_items_list" => __( "Filter FAQ's list", "my-basic-theme" ),
		"items_list_navigation" => __( "FAQ's list navigation", "my-basic-theme" ),
		"items_list" => __( "FAQ's list", "my-basic-theme" ),
		"attributes" => __( "FAQ's attributes", "my-basic-theme" ),
		"name_admin_bar" => __( "FAQ", "my-basic-theme" ),
		"item_published" => __( "FAQ published", "my-basic-theme" ),
		"item_published_privately" => __( "FAQ published privately.", "my-basic-theme" ),
		"item_reverted_to_draft" => __( "FAQ reverted to draft.", "my-basic-theme" ),
		"item_scheduled" => __( "FAQ scheduled", "my-basic-theme" ),
		"item_updated" => __( "FAQ updated.", "my-basic-theme" ),
		"parent_item_colon" => __( "Parent FAQ:", "my-basic-theme" ),
	];

	$args = [
		"label" => __( "FAQ's", "my-basic-theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "f473",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "my_faq", $args );

	/**
	 * Post Type: Games.
	 */

	$labels = [
		"name" => __( "Games", "my-basic-theme" ),
		"singular_name" => __( "Game", "my-basic-theme" ),
		"menu_name" => __( "My Games", "my-basic-theme" ),
		"all_items" => __( "All Games", "my-basic-theme" ),
		"add_new" => __( "Add new", "my-basic-theme" ),
		"add_new_item" => __( "Add new Game", "my-basic-theme" ),
		"edit_item" => __( "Edit Game", "my-basic-theme" ),
		"new_item" => __( "New Game", "my-basic-theme" ),
		"view_item" => __( "View Game", "my-basic-theme" ),
		"view_items" => __( "View Games", "my-basic-theme" ),
		"search_items" => __( "Search Games", "my-basic-theme" ),
		"not_found" => __( "No Games found", "my-basic-theme" ),
		"not_found_in_trash" => __( "No Games found in trash", "my-basic-theme" ),
		"parent" => __( "Parent Game:", "my-basic-theme" ),
		"featured_image" => __( "Featured image for this Game", "my-basic-theme" ),
		"set_featured_image" => __( "Set featured image for this Game", "my-basic-theme" ),
		"remove_featured_image" => __( "Remove featured image for this Game", "my-basic-theme" ),
		"use_featured_image" => __( "Use as featured image for this Game", "my-basic-theme" ),
		"archives" => __( "Game archives", "my-basic-theme" ),
		"insert_into_item" => __( "Insert into Game", "my-basic-theme" ),
		"uploaded_to_this_item" => __( "Upload to this Game", "my-basic-theme" ),
		"filter_items_list" => __( "Filter Games list", "my-basic-theme" ),
		"items_list_navigation" => __( "Games list navigation", "my-basic-theme" ),
		"items_list" => __( "Games list", "my-basic-theme" ),
		"attributes" => __( "Games attributes", "my-basic-theme" ),
		"name_admin_bar" => __( "Game", "my-basic-theme" ),
		"item_published" => __( "Game published", "my-basic-theme" ),
		"item_published_privately" => __( "Game published privately.", "my-basic-theme" ),
		"item_reverted_to_draft" => __( "Game reverted to draft.", "my-basic-theme" ),
		"item_scheduled" => __( "Game scheduled", "my-basic-theme" ),
		"item_updated" => __( "Game updated.", "my-basic-theme" ),
		"parent_item_colon" => __( "Parent Game:", "my-basic-theme" ),
	];

	$args = [
		"label" => __( "Games", "my-basic-theme" ),
		"labels" => $labels,
		"description" => "Add games to our fantastic website",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "games", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
	];

	register_post_type( "mbt_game", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
