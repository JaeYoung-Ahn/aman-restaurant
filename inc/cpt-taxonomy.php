<?php
function fwd_register_custom_post_types() {
    // Register Menu cpt
    $labels = array(
        'name'               => _x( 'Menu', 'post type general name' ),
        'singular_name'      => _x( 'Menu', 'post type singular name'),
        'menu_name'          => _x( 'Menu', 'admin menu' ),
        'name_admin_bar'     => _x( 'Menu', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'menu' ),
        'add_new_item'       => __( 'Add New Menu' ),
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
    register_post_type( 'fwd-menu', $args );
    // Register testimonial cpt
    $labels = array(
        'name'               => _x( 'Testimonials', 'post type general name'  ),
        'singular_name'      => _x( 'Testimonial', 'post type singular name'  ),
        'menu_name'          => _x( 'Testimonials', 'admin menu'  ),
        'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'testimonial' ),
        'add_new_item'       => __( 'Add New Testimonial' ),
        'new_item'           => __( 'New Testimonial' ),
        'edit_item'          => __( 'Edit Testimonial' ),
        'view_item'          => __( 'View Testimonial'  ),
        'all_items'          => __( 'All Testimonials' ),
        'search_items'       => __( 'Search Testimonials' ),
        'parent_item_colon'  => __( 'Parent Testimonials:' ),
        'not_found'          => __( 'No testimonials found.' ),
        'not_found_in_trash' => __( 'No testimonials found in Trash.' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array( 'title', 'editor' ),
        'template'           => array( array( 'core/quote' ) ),
        'template_lock'      => 'all'
    );
    register_post_type( 'fwd-testimonial', $args );
    //services
    $labels = array(
        'name'               => _x( 'Services', 'post type general name'  ),
        'singular_name'      => _x( 'Service', 'post type singular name'  ),
        'menu_name'          => _x( 'Services', 'admin menu'  ),
        'name_admin_bar'     => _x( 'Service', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Services' ),
        'add_new_item'       => __( 'Add New Services' ),
        'new_item'           => __( 'New Services' ),
        'edit_item'          => __( 'Edit Services' ),
        'view_item'          => __( 'View Services'  ),
        'all_items'          => __( 'All Services' ),
        'search_items'       => __( 'Search Services' ),
        'parent_item_colon'  => __( 'Parent Services:' ),
        'not_found'          => __( 'No Services found.' ),
        'not_found_in_trash' => __( 'No Services found in Trash.' ),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array( 'title' ),
        'template'           => array( array( 'core/quote' ) ),
        'template_lock'      => 'all'
    );
    register_post_type( 'fwd-services', $args );
}
add_action( 'init', 'fwd_register_custom_post_types' );
// Register work taxonmies
function fwd_register_taxonomies() {
    // Add Work Category taxonomy
    $labels = array(
        'name'              => _x( 'Work Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Work Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Work Categories' ),
        'all_items'         => __( 'All Work Category' ),
        'parent_item'       => __( 'Parent Work Category' ),
        'parent_item_colon' => __( 'Parent Work Category:' ),
        'edit_item'         => __( 'Edit Work Category' ),
        'view_item'         => __( 'Vview Work Category' ),
        'update_item'       => __( 'Update Work Category' ),
        'add_new_item'      => __( 'Add New Work Category' ),
        'new_item_name'     => __( 'New Work Category Name' ),
        'menu_name'         => __( 'Work Category' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'work-categories' ),
    );
    register_taxonomy( 'fwd-work-category', array( 'fwd-work' ), $args );
    //Add Featured Taxonomy
    $labels = array(
        'name'              => _x( 'Featured', 'taxonomy general name' ),
        'singular_name'     => _x( 'Featured', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Featured' ),
        'all_items'         => __( 'All Featured' ),
        'parent_item'       => __( 'Parent Featured' ),
        'parent_item_colon' => __( 'Parent Featured:' ),
        'edit_item'         => __( 'Edit Featured' ),
        'update_item'       => __( 'Update Featured' ),
        'add_new_item'      => __( 'Add New Featured' ),
        'new_item_name'     => __( 'New Work Featured' ),
        'menu_name'         => __( 'Featured' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'featured' ),
    );
    register_taxonomy( 'fwd-featured', array( 'fwd-work' ), $args );
    $labels = array(
        'name'              => _x( 'Services', 'taxonomy general name' ),
        'singular_name'     => _x( 'Service', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Services' ),
        'all_items'         => __( 'All Services' ),
        'parent_item'       => __( 'Parent Services' ),
        'parent_item_colon' => __( 'Parent Services:' ),
        'edit_item'         => __( 'Edit Services' ),
        'update_item'       => __( 'Update Services' ),
        'add_new_item'      => __( 'Add New Services' ),
        'new_item_name'     => __( 'New Work Service' ),
        'menu_name'         => __( 'ServiceCategory' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'servicecategory' ),
    );
    register_taxonomy( 'tax-fwd-service', array( 'fwd-services' ), $args );
}
add_action( 'init', 'fwd_register_taxonomies');
// flushes Permalinks when switching themes
function fwd_rewrite_flush() {
    fwd_register_custom_post_types();
    fwd_register_taxonomies();
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'fwd_rewrite_flush' );