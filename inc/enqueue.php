<?php
/**
 * Enqueue theme styles and scripts.
 *
 * @package Spicy_Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme assets.
 */
function spicy_video_enqueue_assets() {

	/**
	 * Main stylesheet.
	 */
	wp_enqueue_style(
		'spicy-video-main',
		SPICY_VIDEO_URI . '/assets/css/main.css',
		array(),
		SPICY_VIDEO_VERSION
	);

	/**
	 * Main JavaScript.
	 */
	wp_enqueue_script(
		'spicy-video-main',
		SPICY_VIDEO_URI . '/assets/js/main.js',
		array(),
		SPICY_VIDEO_VERSION,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'spicy_video_enqueue_assets' );
