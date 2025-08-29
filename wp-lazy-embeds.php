<?php
/**
 * Plugin Name: WP-LazyEmbeds
 * Description: Lazy load embedded iframes for music, video, and social media. Handles Spotify, iTunes, Bandcamp, Vimeo, YouTube, Tidal, Deezer, Apple Music, and more. Admin panel for options, fallback animations, and secure API key management.
 * Version: 1.0.0
 * Author: Frank Panduh
 * Author URI: https://frankpanduh.com
 * License: GPL-3.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Define plugin paths
define( 'WP_LAZY_EMBEDS_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_LAZY_EMBEDS_URL', plugin_dir_url( __FILE__ ) );

// Include core files
require_once WP_LAZY_EMBEDS_PATH . 'includes/admin.php';
require_once WP_LAZY_EMBEDS_PATH . 'includes/functions.php';
require_once WP_LAZY_EMBEDS_PATH . 'includes/ajax.php';

// Enqueue scripts
function wp_lazy_embeds_enqueue_scripts() {
    wp_enqueue_script(
        'wp-lazy-embeds-js',
        WP_LAZY_EMBEDS_URL . 'assets/js/lazy-embeds.js',
        array(),
        '1.0.0',
        true
    );
    wp_enqueue_style(
        'wp-lazy-embeds-css',
        WP_LAZY_EMBEDS_URL . 'assets/css/lazy-embeds.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'wp_lazy_embeds_enqueue_scripts' );

?>