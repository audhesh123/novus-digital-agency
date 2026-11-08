<?php
/**
 * AJAX Contact & Quote Form Submission Handler
 *
 * @package Novus_Digital
 */

if (!defined('ABSPATH')) {
    exit;
}

// Register Lead CPT for persistent lead storage in WP Admin
function novus_register_leads_cpt() {
    register_post_type('novus_lead', array(
        'labels' => array(
            'name'          => __('Quote Requests', 'novus-digital'),
            'singular_name' => __('Quote Request', 'novus-digital'),
        ),
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-email-alt',
        'capability_type'    => 'post',
        'capabilities'       => array('create_posts' => false), // Only created via form
        'map_meta_cap'       => true,
        'supports'           => array('title', 'editor', 'custom-fields'),
    ));
}
add_action('init', 'novus_register_leads_cpt');

function novus_handle_quote_submission() {
    // 1. Verify Nonce Security
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'novus_nonce_action')) {
        wp_send_json_error(array('message' => __('Security verification failed. Please refresh the page and try again.', 'novus-digital')));
    }

    // 2. Spam Honeypot Check
    if (!empty($_POST['website_url_trap'])) {
        // Silent bot rejection
        wp_send_json_success(array('message' => __('Your request has been received.', 'novus-digital')));
    }

    // 3. Sanitize and Validate Inputs
    $full_name     = isset($_POST['full_name']) ? sanitize_text_field($_POST['full_name']) : '';
    $email_address = isset($_POST['email_address']) ? sanitize_email($_POST['email_address']) : '';
    $company_name  = isset($_POST['company_name']) ? sanitize_text_field($_POST['company_name']) : '';
    $phone_number  = isset($_POST['phone_number']) ? sanitize_text_field($_POST['phone_number']) : '';
    $service_type  = isset($_POST['service_type']) ? sanitize_text_field($_POST['service_type']) : '';
    $budget_range  = isset($_POST['budget_range']) ? sanitize_text_field($_POST['budget_range']) : '';
    $contact_method= isset($_POST['contact_method']) ? sanitize_text_field($_POST['contact_method']) : 'email';
    $project_desc  = isset($_POST['project_description']) ? sanitize_textarea_field($_POST['project_description']) : '';

    if (empty($full_name)) {
        wp_send_json_error(array('message' => __('Please enter your full name.', 'novus-digital')));
    }

    if (empty($email_address) || !is_email($email_address)) {
        wp_send_json_error(array('message' => __('Please enter a valid email address.', 'novus-digital')));
    }

    if (empty($project_desc)) {
        wp_send_json_error(array('message' => __('Please provide a brief description of your project.', 'novus-digital')));
    }

    // 4. Save to WordPress Database so submissions are never lost even if SMTP fails
    $post_title = sprintf('Quote Request: %s (%s)', $full_name, $service_type);
    $lead_content = "Full Name: {$full_name}\n"
                  . "Email: {$email_address}\n"
                  . "Company: {$company_name}\n"
                  . "Phone: {$phone_number}\n"
                  . "Service: {$service_type}\n"
                  . "Budget: {$budget_range}\n"
                  . "Preferred Contact: {$contact_method}\n\n"
                  . "Project Description:\n{$project_desc}";

    $post_id = wp_insert_post(array(
        'post_title'   => $post_title,
        'post_content' => $lead_content,
        'post_status'  => 'private',
        'post_type'    => 'novus_lead',
    ));

    // 5. Send Notification Email via wp_mail
    $recipient = get_theme_mod('novus_company_email', 'audhesh123@gmail.com');
    $subject   = sprintf('[%s] New Free Quote Request from %s', get_bloginfo('name'), $full_name);
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('From: %s <%s>', get_bloginfo('name'), get_option('admin_email')),
        sprintf('Reply-To: %s <%s>', $full_name, $email_address),
    );

    @wp_mail($recipient, $subject, $lead_content, $headers);

    wp_send_json_success(array(
        'message' => __('Thank you! Your quote request has been securely received. Our team will review your specifications and contact you within 24 hours.', 'novus-digital')
    ));
}
add_action('wp_ajax_novus_submit_quote', 'novus_handle_quote_submission');
add_action('wp_ajax_nopriv_novus_submit_quote', 'novus_handle_quote_submission');
