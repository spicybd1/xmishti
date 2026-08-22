<?php
/**
 * Theme header.
 *
 * @package Spicy_Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta
		name="viewport"
		content="width=device-width, initial-scale=1"
	>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#primary">
	<?php esc_html_e( 'Skip to content', 'spicy-video' ); ?>
</a>

<header class="site-header">

	<div class="container site-header__inner">

		<!-- Logo / Site Name -->
		<div class="site-branding">

			<?php if ( has_custom_logo() ) : ?>

				<?php the_custom_logo(); ?>

			<?php else : ?>

				<a
					class="site-title"
					href="<?php echo esc_url( home_url( '/' ) ); ?>"
				>
					<?php bloginfo( 'name' ); ?>
				</a>

			<?php endif; ?>

		</div>

		<!-- Desktop Navigation -->
		<nav
			class="primary-navigation"
			aria-label="<?php esc_attr_e( 'Primary menu', 'spicy-video' ); ?>"
		>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>

		</nav>

		<!-- Mobile Menu Button -->
		<button
			class="mobile-menu-toggle"
			type="button"
			aria-controls="mobile-navigation"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Open menu', 'spicy-video' ); ?>"
		>
			<span></span>
			<span></span>
			<span></span>
		</button>

	</div>

	<!-- Mobile Navigation -->
	<div
		id="mobile-navigation"
		class="mobile-navigation"
		aria-hidden="true"
	>

		<div class="container">

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'mobile-menu',
					'container'      => false,
					'fallback_cb'    => false,
				)
			);
			?>

		</div>

	</div>

</header>

<main id="primary" class="site-main">
