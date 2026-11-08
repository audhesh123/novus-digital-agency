<?php
/**
 * Novus Digital functions and definitions
 *
 * @package Novus_Digital
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function novus_setup() {
    // Make theme available for translation
    load_theme_textdomain('novus-digital', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage document title
    add_theme_support('title-tag');

    // Enable Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('novus-portfolio', 600, 380, true);
    add_image_size('novus-product', 500, 320, true);

    // Register Navigation Menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Navigation Menu', 'novus-digital'),
        'footer-menu'  => __('Footer Navigation Menu', 'novus-digital'),
    ));

    // HTML5 markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Custom Logo Support
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Responsive Embeds & WooCommerce support
    add_theme_support('responsive-embeds');
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'novus_setup');

/**
 * Enqueue scripts and styles
 */
function novus_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'novus-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&family=JetBrains+Mono:wght@500&display=swap',
        array(),
        null
    );

    // Main Theme CSS
    wp_enqueue_style(
        'novus-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );

    // Root style.css
    wp_enqueue_style(
        'novus-style',
        get_stylesheet_uri(),
        array('novus-main-style'),
        '1.0.0'
    );

    // Main JavaScript
    wp_enqueue_script(
        'novus-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '2.2.0',
        true
    );

    // Localize Script for secure AJAX submissions
    wp_localize_script('novus-main-js', 'novusAjax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('novus_nonce_action'),
    ));
}
add_action('wp_enqueue_scripts', 'novus_scripts');

/**
 * Register Widget Areas
 */
function novus_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'novus-digital'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in footer column 1.', 'novus-digital'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-heading">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'novus_widgets_init');

/**
 * Fallback Navigation Menu when no menu is assigned in WP Admin
 */
function novus_default_menu_fallback() {
    $current = is_front_page() ? ' active' : '';
    echo '<a href="' . esc_url(home_url('/')) . '" class="nav-link' . $current . '">' . esc_html__('Home', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/services/')) . '" class="nav-link">' . esc_html__('Our Services', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/products/')) . '" class="nav-link">' . esc_html__('Our Products', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/portfolio/')) . '" class="nav-link">' . esc_html__('Our Portfolio', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/about/')) . '" class="nav-link">' . esc_html__('About Us', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/contact/')) . '" class="nav-link">' . esc_html__('Contact Us', 'novus-digital') . '</a>';
}

function novus_mobile_default_menu_fallback() {
    $current = is_front_page() ? ' active' : '';
    echo '<a href="' . esc_url(home_url('/')) . '" class="mobile-nav-link' . $current . '">' . esc_html__('Home', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/services/')) . '" class="mobile-nav-link">' . esc_html__('Our Services', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/products/')) . '" class="mobile-nav-link">' . esc_html__('Our Products', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/portfolio/')) . '" class="mobile-nav-link">' . esc_html__('Our Portfolio', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/about/')) . '" class="mobile-nav-link">' . esc_html__('About Us', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/contact/')) . '" class="mobile-nav-link">' . esc_html__('Contact Us', 'novus-digital') . '</a>';
    echo '<a href="' . esc_url(home_url('/privacy-policy/')) . '" class="mobile-nav-link">' . esc_html__('Privacy Policy', 'novus-digital') . '</a>';
}

/**
 * Include Required Helper Modules
 */
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/cpt.php';
require_once get_template_directory() . '/inc/ajax-contact.php';
