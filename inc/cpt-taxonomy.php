<?php
function aman_register_custom_post_types() {
    // Register Menu cpt
    $labels = array(
        'name'               => _x( 'Menu', 'post type general name' ),
        'singular_name'      => _x( 'Menu', 'post type singular name'),
        'menu_name'          => _x( 'Menu', 'admin menu' ),
        'name_admin_bar'     => _x( 'Menu', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'menu' ),
        'add_new_item'       => __( 'Add New Menu Item' ),
        'new_item'           => __( 'New Menu' ),
        'edit_item'          => __( 'Edit Menu' ),
        'view_item'          => __( 'View Menu' ),
        'all_items'          => __( 'All Menu' ),
        'search_items'       => __( 'Search Menu' ),
        'parent_item_colon'  => __( 'Parent Menu:' ),
        'not_found'          => __( 'No menu found.' ),
        'not_found_in_trash' => __( 'No menu found in Trash.' ),
        'archives'           => __( 'Menu Archives'),
        'insert_into_item'   => __( 'Insert into menu'),
        'uploaded_to_this_item' => __( 'Uploaded to this menu'),
        'filter_item_list'   => __( 'Filter menu list'),
        'items_list_navigation' => __( 'Menu list navigation'),
        'items_list'         => __( 'Menu list'),
        'featured_image'     => __( 'Menu featured image'),
        'set_featured_image' => __( 'Set menu featured image'),
        'remove_featured_image' => __( 'Remove menu featured image'),
        'use_featured_image' => __( 'Use as featured image'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'menu' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'thumbnail', 'editor' ),
    );
    register_post_type( 'aman-menu', $args );
}
add_action( 'init', 'aman_register_custom_post_types' );

// flushes Permalinks when switching themes
function fwd_rewrite_flush() {
    fwd_register_custom_post_types();
    fwd_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fwd_rewrite_flush' );