<?php
/**
 * Plugin Name: CSS Responsive Grid System
 * Plugin URI: https://github.com/haikallfiqih/wordpress-responsive-grid-system
 * Description: A lightweight and flexible grid system for WordPress websites. Create responsive layouts easily with a 12-column grid system.
 * Version: 1.0.0
 * Requires at least: 5.0
 * Requires PHP: 7.2
 * Author: Haikal Fiqih
 * Author URI: https://github.com/haikallfiqih
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: css-responsive-grid-system
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add defer attribute to script tag
 */
function wrg_add_defer_attribute($tag, $handle) {
    if ('grid-system' === $handle) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'wrg_add_defer_attribute', 10, 2);

/**
 * Enqueue grid system styles and scripts only on the frontend
 */
function wrg_enqueue_grid_system() {
    // Only load on frontend pages
    if (is_admin()) {
        return;
    }

    // Enqueue CSS
    wp_enqueue_style(
        'css-responsive-grid-system',
        plugins_url('css/grid-system.css', __FILE__),
        array(),
        '1.0.0'
    );

    // Enqueue JavaScript
    wp_enqueue_script(
        'grid-system',
        plugins_url('js/grid-system.js', __FILE__),
        array(),
        '1.0.0',
        true
    );

    wp_add_inline_script('grid-system', '
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
