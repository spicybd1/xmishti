<?php
/**
 * Main template file.
 *
 * @package Spicy_Video
 */

get_header();
?>

<div class="container">

	<section class="content-area">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : ?>

				<?php the_post(); ?>

				<article <?php post_class( 'post-card' ); ?>>

					<?php if ( has_post_thumbnail() ) : ?>

						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'medium_large' ); ?>
						</a>

					<?php endif; ?>

					<h2 class="post-card__title">
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>

				</article>

			<?php endwhile; ?>

		<?php else : ?>

			<p>
				<?php esc_html_e( 'No content found.', 'spicy-video' ); ?>
			</p>

		<?php endif; ?>

	</section>

</div>

<?php
get_footer();
