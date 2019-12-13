<?php

/**
 * Plugin Name: ResponseTappr
 * Plugin URI: https://github.com/herdl/responsetappr
 * Description: A ResponseTap Wordpress integration.
 * Author: Herdl
 * Version: 1.0.0
 * Author URI: https://herdl.com
 */

if (!defined('WPINC')) {
    die('No direct access allowed');
}

function responsetappr_render_script(): string {
    return include_once(__DIR__ . '/templates/script.php');
}

function responsetappr_register_settings() {
    add_submenu_page('options-general.php', 'ResponseTappr', 'ResponseTappr', 'manage_options', 'responsetappr', 'responsetappr_settings');
}

function responsetappr_settings() {
    $user = wp_get_current_user();

    if (!current_user_can('administrator')) {
        echo '<p>Sorry, you are not allowed to access this page.</p>';
        return;
    }

    if (isset($_REQUEST['submit'])) {
        if (!isset($_REQUEST['responsetappr_nonce'])) {
            $errorMessage = 'nonce field is missing. Settings NOT saved.';
        } elseif (!wp_verify_nonce($_REQUEST['responsetappr_nonce'], 'responsetappr')) {
            $errorMessage = 'Invalid nonce specified. Settings NOT saved.';
        } else {
            update_option('responsetappr_website_id', wp_strip_all_tags($_REQUEST['responsetappr_website_id']));
            $message = 'Settings Saved.';
        }
    }

    include_once(__DIR__ . '/templates/settings.php');
}

function responsetappr_shortcode($attributes): string {
    $attributes = shortcode_atts([
        'responsetap_number' => '',
        'number' => '',
    ], $attributes, 'responsetappr');

    $responseTapNumber = $attributes['responsetap_number'];
    $number = $attributes['number'];

    $response = $number;

    if ($responseTapNumber) {
        $response = "<span class=\"rTapNumber$responseTapNumber\">$number</span>";
    }

    $escapedNumber = preg_replace('/[^0-9+]/', '', $number);

    return "<a href=\"tel:$escapedNumber\">$response</a>";
}


add_action('admin_menu', 'responsetappr_register_settings');
add_action('wp_footer', 'responsetappr_render_script');
add_shortcode('responsetappr', 'responsetappr_shortcode');
