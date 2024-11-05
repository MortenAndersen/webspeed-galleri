<?php
// Custom Taxonomy = 'personer-type'

    function custom_taxonomy_galleri() {

    $labels = array(
        'name'                       => _x( 'Typer', 'Taxonomy General Name', 'websepeed-galleri-domain' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'websepeed-galleri-domain' ),
        'menu_name'                  => __( 'Type', 'websepeed-galleri-domain' ),
        'all_items'                  => __( 'All Items', 'websepeed-galleri-domain' ),
        'parent_item'                => __( 'Parent type', 'websepeed-galleri-domain' ),
        'parent_item_colon'          => __( 'Parent type:', 'websepeed-galleri-domain' ),
        'new_item_name'              => __( 'New Item Name', 'websepeed-galleri-domain' ),
        'add_new_item'               => __( 'Add New type', 'websepeed-galleri-domain' ),
        'edit_item'                  => __( 'Edit Item', 'websepeed-galleri-domain' ),
        'update_item'                => __( 'Update Item', 'websepeed-galleri-domain' ),
        'view_item'                  => __( 'View Item', 'websepeed-galleri-domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'websepeed-galleri-domain' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'websepeed-galleri-domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'websepeed-galleri-domain' ),
        'popular_items'              => __( 'Popular Items', 'websepeed-galleri-domain' ),
        'search_items'               => __( 'Search Items', 'websepeed-galleri-domain' ),
        'not_found'                  => __( 'Not Found', 'websepeed-galleri-domain' ),
        'no_terms'                   => __( 'No items', 'websepeed-galleri-domain' ),
        'items_list'                 => __( 'Items list', 'websepeed-galleri-domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'websepeed-galleri-domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
        'show_in_nav_menus'          => false

    );
    register_taxonomy( 'galleri-type', array( 'galleri' ), $args );
}

add_action( 'init', 'custom_taxonomy_galleri', 2 );