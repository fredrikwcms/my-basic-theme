<?php

function cptui_register_my_taxes() {

/**
 * Taxonomy: Game Genres.
 */

$labels = [
    "name" => __( "Game Genres", "my-basic-theme" ),
    "singular_name" => __( "Game Genre", "my-basic-theme" ),
    "menu_name" => __( "Game Genres", "my-basic-theme" ),
    "all_items" => __( "All Game Genres", "my-basic-theme" ),
    "edit_item" => __( "Edit Game Genre", "my-basic-theme" ),
    "view_item" => __( "View Game Genre", "my-basic-theme" ),
    "update_item" => __( "Update Game Genre name", "my-basic-theme" ),
    "add_new_item" => __( "Add new Game Genre", "my-basic-theme" ),
    "new_item_name" => __( "New Game Genre name", "my-basic-theme" ),
    "parent_item" => __( "Parent Game Genre", "my-basic-theme" ),
    "parent_item_colon" => __( "Parent Game Genre:", "my-basic-theme" ),
    "search_items" => __( "Search Game Genres", "my-basic-theme" ),
    "popular_items" => __( "Popular Game Genres", "my-basic-theme" ),
    "separate_items_with_commas" => __( "Separate Game Genres with commas", "my-basic-theme" ),
    "add_or_remove_items" => __( "Add or remove Game Genres", "my-basic-theme" ),
    "choose_from_most_used" => __( "Choose from the most used Game Genres", "my-basic-theme" ),
    "not_found" => __( "No Game Genres found", "my-basic-theme" ),
    "no_terms" => __( "No Game Genres", "my-basic-theme" ),
    "items_list_navigation" => __( "Game Genres list navigation", "my-basic-theme" ),
    "items_list" => __( "Game Genres list", "my-basic-theme" ),
];

$args = [
    "label" => __( "Game Genres", "my-basic-theme" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'genre', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "game_genre",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "game_genre", [ "mbt_game" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
