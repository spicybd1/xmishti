<?php
/**
 * Front page template.
 *
 * @package Spicy_Video
 */

get_header();
?>

<div class="container">

	<section class="homepage">

		<header class="homepage__header">
			<h1>
				<?php bloginfo( 'name' ); ?>
			</h1>

			<p>
				<?php bloginfo( 'description' ); ?>
			</p>
		</header>

	</section>

</div>

<?php
get_footer();
