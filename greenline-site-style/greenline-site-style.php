<?php
/**
 * Plugin Name: Greenline Site Style
 * Description: Practice site styling for the Greenline Studio WordPress build.
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'greenline-site-style',
        plugin_dir_url(__FILE__) . 'style.css',
        [],
        '1.0.7'
    );
});

add_action('init', function () {
    foreach (['_yoast_wpseo_title', '_yoast_wpseo_metadesc', '_yoast_wpseo_focuskw'] as $meta_key) {
        register_post_meta('page', $meta_key, [
            'single' => true,
            'type' => 'string',
            'show_in_rest' => true,
            'auth_callback' => function () {
                return current_user_can('edit_pages');
            },
        ]);
    }
});
