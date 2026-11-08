<?php
/**
 * Novus Digital Theme Customizer
 *
 * @package Novus_Digital
 */

if (!defined('ABSPATH')) {
    exit;
}

function novus_customize_register($wp_customize) {
    // 1. Company Information Section
    $wp_customize->add_section('novus_contact_section', array(
        'title'       => __('Company Information & Socials', 'novus-digital'),
        'priority'    => 30,
        'description' => __('Manage your company contact details, operating hours, and social media links.', 'novus-digital'),
    ));

    // Company Email
    $wp_customize->add_setting('novus_company_email', array(
        'default'           => 'audhesh123@gmail.com',
        'sanitize_callback' => 'sanitize_email',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_company_email', array(
        'label'    => __('Company Email Address', 'novus-digital'),
        'section'  => 'novus_contact_section',
        'type'     => 'email',
    ));

    // Company Phone
    $wp_customize->add_setting('novus_company_phone', array(
        'default'           => '+1 (343) 987-1244',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_company_phone', array(
        'label'    => __('Company Phone Number', 'novus-digital'),
        'section'  => 'novus_contact_section',
        'type'     => 'text',
    ));

    // Company Hours
    $wp_customize->add_setting('novus_company_hours', array(
        'default'           => 'Mon – Fri: 9:00 AM – 6:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_company_hours', array(
        'label'    => __('Business Operating Hours', 'novus-digital'),
        'section'  => 'novus_contact_section',
        'type'     => 'text',
    ));

    // Instagram URL
    $wp_customize->add_setting('novus_instagram_url', array(
        'default'           => 'https://instagram.com',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_instagram_url', array(
        'label'    => __('Instagram Profile URL', 'novus-digital'),
        'section'  => 'novus_contact_section',
        'type'     => 'url',
    ));

    // Facebook URL
    $wp_customize->add_setting('novus_facebook_url', array(
        'default'           => 'https://facebook.com',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_facebook_url', array(
        'label'    => __('Facebook Page URL', 'novus-digital'),
        'section'  => 'novus_contact_section',
        'type'     => 'url',
    ));

    // 2. Hero Section Controls
    $wp_customize->add_section('novus_hero_section', array(
        'title'       => __('Homepage Hero Settings', 'novus-digital'),
        'priority'    => 35,
        'description' => __('Customize the primary headline, subtext, and call-to-action buttons.', 'novus-digital'),
    ));

    $wp_customize->add_setting('novus_hero_headline', array(
        'default'           => 'Beautiful Websites. Powerful Apps. Affordable Prices.',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_hero_headline', array(
        'label'    => __('Hero Headline', 'novus-digital'),
        'section'  => 'novus_hero_section',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('novus_hero_subtext', array(
        'default'           => 'We help startups, entrepreneurs, and growing businesses turn their ideas into modern digital experiences without breaking the budget.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_hero_subtext', array(
        'label'    => __('Hero Subtitle', 'novus-digital'),
        'section'  => 'novus_hero_section',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('novus_cta_btn_text', array(
        'default'           => 'Get a Free Quote',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('novus_cta_btn_text', array(
        'label'    => __('Header CTA Button Text', 'novus-digital'),
        'section'  => 'novus_hero_section',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'novus_customize_register');
