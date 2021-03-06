<?php 
/*
* Registering and initializing custom post types.
*/


function honeycakes_review_init() {
    $labels = array(
        'name'                  => _x( 'Reviews', 'Post type general name', 'honeycakes' ),
        'singular_name'         => _x( 'Reviews', 'Post type singular name', 'honeycakes' ),
        'menu_name'             => _x( 'Reviews', 'Admin Menu text', 'honeycakes' ),
        'name_admin_bar'        => _x( 'Reviews', 'Add New on Toolbar', 'honeycakes' ),
        'add_new'               => __( 'Add New', 'honeycakes' ),
        'add_new_item'          => __( 'Add New Review', 'honeycakes' ),
        'new_item'              => __( 'New Reviews', 'honeycakes' ),
        'edit_item'             => __( 'Edit Reviews', 'honeycakes' ),
        'view_item'             => __( 'View Reviews', 'honeycakes' ),
        'all_items'             => __( 'All Reviews', 'honeycakes' ),
        'search_items'          => __( 'Search Reviews', 'honeycakes' ),
        'parent_item_colon'     => __( 'Parent Reviews:', 'honeycakes' ),
        'not_found'             => __( 'No reviews found.', 'honeycakes' ),
        'not_found_in_trash'    => __( 'No reviews found in Trash.', 'honeycakes' ),
        'featured_image'        => _x( 'Review Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'archives'              => _x( 'Review archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'honeycakes' ),
        'insert_into_item'      => _x( 'Insert into review', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'honeycakes' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this review', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'honeycakes' ),
        'filter_items_list'     => _x( 'Filter review list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'honeycakes' ),
        'items_list_navigation' => _x( 'Review list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'honeycakes' ),
        'items_list'            => _x( 'Review list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'honeycakes' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Review custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'reviews' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'honeycakes_review', $args );
}
add_action( 'init', 'honeycakes_review_init' );



function honeycakes_recipe_init() {
    $labels = array(
        'name'                  => _x( 'Recipes', 'Post type general name', 'honeycakes' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'honeycakes' ),
        'menu_name'             => _x( 'Recipes', 'Admin Menu text', 'honeycakes' ),
        'name_admin_bar'        => _x( 'Recipe', 'Add New on Toolbar', 'honeycakes' ),
        'add_new'               => __( 'Add New', 'honeycakes' ),
        'add_new_item'          => __( 'Add New recipe', 'honeycakes' ),
        'new_item'              => __( 'New recipe', 'honeycakes' ),
        'edit_item'             => __( 'Edit recipe', 'honeycakes' ),
        'view_item'             => __( 'View recipe', 'honeycakes' ),
        'all_items'             => __( 'All recipes', 'honeycakes' ),
        'search_items'          => __( 'Search recipes', 'honeycakes' ),
        'parent_item_colon'     => __( 'Parent recipes:', 'honeycakes' ),
        'not_found'             => __( 'No recipes found.', 'honeycakes' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'honeycakes' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'honeycakes' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'honeycakes' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'honeycakes' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'honeycakes' ),
        'filter_items_list'     => _x( 'Filter recipes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'honeycakes' ),
        'items_list_navigation' => _x( 'Recipes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'honeycakes' ),
        'items_list'            => _x( 'Recipes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'honeycakes' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recipe custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipes' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'honeycakes_recipe', $args );
}
add_action( 'init', 'honeycakes_recipe_init' );