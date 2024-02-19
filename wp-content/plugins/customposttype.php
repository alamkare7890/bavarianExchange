<?php 






/*
Plugin Name: Custom Post Types
Description: Add post types for custom articles
Author: Masum Alam
*/
// Hook ht_custom_post_custom_article() to the init action hook
add_action( 'init', 'ht_custom_post_custom_article' );
// The custom function to register a custom article post type
function ht_custom_post_custom_article() {
    // Set the labels. This variable is used in the $args array
    $labels = array(
        'name'               => __( 'Auctions' ),
        'singular_name'      => __( 'Auction' ),
        'add_new'            => __( 'Add New Auctions' ),
        'add_new_item'       => __( 'Add New Auctions' ),
        'edit_item'          => __( 'Edit Auctions' ),
        'new_item'           => __( 'New Auctions' ),
        'all_items'          => __( 'All Auctions' ),
        'view_item'          => __( 'View Auctions' ),
        'search_items'       => __( 'Search Auctions' ),
        'featured_image'     => 'Poster',
        'set_featured_image' => 'Add Poster'
    );
// The arguments for our post type, to be entered as parameter 2 of register_post_type()
    $args = array(
        'labels'            => $labels,
        'description'       => 'Holds our Auctions post specific data',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields' ),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
    );
    // Call the actual WordPress function
    // Parameter 1 is a name for the post type
    // Parameter 2 is the $args array
    register_post_type('article', $args);
}

add_theme_support( 'post-thumbnails' );

