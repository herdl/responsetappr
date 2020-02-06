<?php

/**
 * Plugin Name: ResponseTap WP
 * Plugin URI: https://github.com/herdl/responsetappr
 * Description: A ResponseTap Wordpress integration.
 * Author: Herdl
 * Version: 1.1.3
 * Author URI: https://herdl.com
 */

if (!defined('WPINC')) {
    die('No direct access allowed');
}

function responsetap_wp_render_script(): string {
    return include_once(__DIR__ . '/templates/script.php');
}

function responsetap_wp_register_settings() {
    add_submenu_page('options-general.php', 'ResponseTap WP', 'ResponseTap WP', 'manage_options', 'responsetap_wp', 'responsetap_wp_settings');
}

function responsetap_wp_settings() {
    if (!current_user_can('administrator')) {
        echo '<p>Sorry, you are not allowed to access this page.</p>';
        return;
    }

    if (isset($_REQUEST['submit'])) {
        if (!isset($_REQUEST['responsetap_wp_nonce'])) {
            $errorMessage = 'nonce field is missing. Settings NOT saved.';
        } elseif (!wp_verify_nonce($_REQUEST['responsetap_wp_nonce'], 'responsetap_wp')) {
            $errorMessage = 'Invalid nonce specified. Settings NOT saved.';
        } else {
            update_option('responsetap_wp_website_id', wp_strip_all_tags(preg_replace('/[^0-9]/', '', $_REQUEST['responsetap_wp_website_id'])));
            $message = 'Settings Saved.';
        }
    }

    include_once(__DIR__ . '/templates/settings.php');
}

function responsetap_wp_shortcode($attributes): string {
    $attributes = shortcode_atts([
        'responsetap_number' => '',
        'number' => '',
    ], $attributes, 'responsetap_wp');

    $responseTapNumber = $attributes['responsetap_number'];
    $number = $attributes['number'];

    $response = $number;

    if ($responseTapNumber) {
        $response = "<span class=\"rTapNumber$responseTapNumber\">$number</span>";
    }

    $escapedNumber = preg_replace('/[^0-9+]/', '', $number);

    return "<a href=\"tel:$escapedNumber\">$response</a>";
}

add_action('admin_menu', 'responsetap_wp_register_settings');
add_action('wp_footer', 'responsetap_wp_render_script');
add_shortcode('responsetap_wp', 'responsetap_wp_shortcode');
