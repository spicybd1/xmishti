<?php
/**
 * Theme footer.
 *
 * @package Spicy_Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

</main>

<footer class="site-footer">

	<div class="container">

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'menu_class'     => 'footer-menu',
				'container'      => 'nav',
				'container_class' => 'footer-navigation',
				'fallback_cb'    => false,
			)
		);
		?>

		<p class="site-footer__copyright">
			&copy;
			<?php echo esc_html( gmdate( 'Y' ) ); ?>
			<?php bloginfo( 'name' ); ?>
		</p>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
