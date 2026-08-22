<?php
/**
 * Spicy Video Theme Functions
 *
 * @package Spicy_Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Theme version.
 */
define( 'SPICY_VIDEO_VERSION', '1.0.0' );

/**
 * Theme directory path.
 */
define( 'SPICY_VIDEO_DIR', get_template_directory() );

/**
 * Theme directory URI.
 */
define( 'SPICY_VIDEO_URI', get_template_directory_uri() );

/**
 * Load theme setup.
 */
require_once SPICY_VIDEO_DIR . '/inc/theme-setup.php';

/**
 * Load theme assets.
 */
require_once SPICY_VIDEO_DIR . '/inc/enqueue.php';
