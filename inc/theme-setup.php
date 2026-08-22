<?php
/**
 * Theme setup.
 *
 * @package Spicy_Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Sets up theme defaults and registers WordPress features.
 */
function spicy_video_setup() {

	/**
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/**
	 * Featured images.
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Custom logo.
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/**
	 * HTML5 markup support.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	/**
	 * Automatic feed links.
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Navigation menu.
	 */
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'spicy-video' ),
			'footer'  => __( 'Footer Menu', 'spicy-video' ),
		)
	);

	/**
	 * Make the theme translation-ready.
	 */
	load_theme_textdomain(
		'spicy-video',
		SPICY_VIDEO_DIR . '/languages'
	);
}

add_action( 'after_setup_theme', 'spicy_video_setup' );
