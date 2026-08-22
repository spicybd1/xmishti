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

	$css_file = SPICY_VIDEO_DIR . '/assets/css/main.css';
	$js_file  = SPICY_VIDEO_DIR . '/assets/js/main.js';

	$css_version = file_exists( $css_file )
		? filemtime( $css_file )
		: SPICY_VIDEO_VERSION;

	$js_version = file_exists( $js_file )
		? filemtime( $js_file )
		: SPICY_VIDEO_VERSION;

	wp_enqueue_style(
		'spicy-video-main',
		SPICY_VIDEO_URI . '/assets/css/main.css',
		array(),
		$css_version
	);

	wp_enqueue_script(
		'spicy-video-main',
		SPICY_VIDEO_URI . '/assets/js/main.js',
		array(),
		$js_version,
		true
	);
}

add_action( 'wp_enqueue_scripts', 'spicy_video_enqueue_assets' );
