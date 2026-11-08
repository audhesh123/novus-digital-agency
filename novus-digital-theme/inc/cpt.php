<?php
/**
 * Custom Post Types & Taxonomies for Portfolio and Digital Products
 *
 * @package Novus_Digital
 */

if (!defined('ABSPATH')) {
    exit;
}

function novus_register_custom_post_types() {
    // 1. Portfolio Post Type
    $portfolio_labels = array(
        'name'               => _x('Portfolio Projects', 'post type general name', 'novus-digital'),
        'singular_name'      => _x('Portfolio Project', 'post type singular name', 'novus-digital'),
        'menu_name'          => _x('Portfolio', 'admin menu', 'novus-digital'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', 'novus-digital'),
        'add_new'            => _x('Add New Project', 'project', 'novus-digital'),
        'add_new_item'       => __('Add New Project', 'novus-digital'),
        'new_item'           => __('New Project', 'novus-digital'),
        'edit_item'          => __('Edit Project', 'novus-digital'),
        'view_item'          => __('View Project', 'novus-digital'),
        'all_items'          => __('All Projects', 'novus-digital'),
        'search_items'       => __('Search Projects', 'novus-digital'),
        'not_found'          => __('No projects found.', 'novus-digital'),
        'not_found_in_trash' => __('No projects found in Trash.', 'novus-digital'),
    );

    $portfolio_args = array(
        'labels'             => $portfolio_labels,
        'description'        => __('Showcase of website and application deliverables.', 'novus-digital'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'portfolio-item'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true,
    );
    register_post_type('portfolio', $portfolio_args);

    // Portfolio Taxonomy (Categories: Business, E-commerce, Web Apps, Mobile, Landing Pages)
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name'              => _x('Project Categories', 'taxonomy general name', 'novus-digital'),
            'singular_name'     => _x('Project Category', 'taxonomy singular name', 'novus-digital'),
            'search_items'      => __('Search Categories', 'novus-digital'),
            'all_items'         => __('All Categories', 'novus-digital'),
            'edit_item'         => __('Edit Category', 'novus-digital'),
            'update_item'       => __('Update Category', 'novus-digital'),
            'add_new_item'      => __('Add New Category', 'novus-digital'),
            'new_item_name'     => __('New Category Name', 'novus-digital'),
            'menu_name'         => __('Categories', 'novus-digital'),
        ),
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'project-category'),
        'show_in_rest'      => true,
    ));

    // 2. Company Digital Products Post Type (Only register if WooCommerce is not already providing 'product')
    if (!post_type_exists('product')) {
        $product_labels = array(
            'name'               => _x('Digital Products', 'post type general name', 'novus-digital'),
            'singular_name'      => _x('Digital Product', 'post type singular name', 'novus-digital'),
            'menu_name'          => _x('Our Products', 'admin menu', 'novus-digital'),
            'add_new'            => _x('Add New Product', 'product', 'novus-digital'),
            'add_new_item'       => __('Add New Product', 'novus-digital'),
            'edit_item'          => __('Edit Product', 'novus-digital'),
            'view_item'          => __('View Product', 'novus-digital'),
            'all_items'          => __('All Products', 'novus-digital'),
            'search_items'       => __('Search Products', 'novus-digital'),
            'not_found'          => __('No products found.', 'novus-digital'),
        );

        $product_args = array(
            'labels'             => $product_labels,
            'description'        => __('Proprietary software products and developer starter kits.', 'novus-digital'),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'company-product'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 6,
            'menu_icon'          => 'dashicons-products',
            'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
            'show_in_rest'       => true,
        );
        register_post_type('product', $product_args);

        // Product Category
        register_taxonomy('product_category', 'product', array(
            'labels' => array(
                'name'          => _x('Product Categories', 'taxonomy general name', 'novus-digital'),
                'singular_name' => _x('Product Category', 'taxonomy singular name', 'novus-digital'),
                'all_items'     => __('All Product Categories', 'novus-digital'),
                'menu_name'     => __('Product Categories', 'novus-digital'),
            ),
            'hierarchical'      => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'show_in_rest'      => true,
            'rewrite'           => array('slug' => 'product-category'),
        ));
    }
}
add_action('init', 'novus_register_custom_post_types');
