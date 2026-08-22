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

	</div>

</header>

<main id="primary" class="site-main">
