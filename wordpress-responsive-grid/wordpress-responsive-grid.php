<?php
/**
 * Plugin Name: WordPress Responsive Grid System
 * Plugin URI: 
 * Description: A responsive grid system for WordPress
 * Version: 1.0.0
 * Author: Haikal Fiqih
 * License: GPL v2 or later
 */

if (!defined('ABSPATH')) {
    exit;
}

function wrg_enqueue_grid_system() {
    // Enqueue CSS
    wp_enqueue_style(
        'wordpress-responsive-grid',
        plugins_url('css/grid-system.css', __FILE__),
        array(),
        '1.0.0'
    );

    // Enqueue JavaScript
    wp_enqueue_script(
        'wordpress-responsive-grid',
        plugins_url('js/grid-system.js', __FILE__),
        array(),
        '1.0.0',
        true
    );

    // Initialize the grid system
    wp_add_inline_script('wordpress-responsive-grid', '
        document.addEventListener("DOMContentLoaded", function() {
            new GridSystem({
                columns: 12,
                breakpoints: {
                    xs: 0,
                    sm: 576,
                    md: 768,
                    lg: 992,
                    xl: 1200,
                }
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'wrg_enqueue_grid_system');
