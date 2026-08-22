<?php
/**
 * Video card template.
 *
 * @package Spicy_Video
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<article <?php post_class( 'video-card' ); ?>>

	<div class="video-card__thumbnail">

		<a
			href="<?php the_permalink(); ?>"
			aria-label="<?php echo esc_attr( get_the_title() ); ?>"
		>

			<?php if ( has_post_thumbnail() ) : ?>

				<?php
				the_post_thumbnail(
					'medium_large',
					array(
						'loading' => 'lazy',
					)
				);
				?>

			<?php else : ?>

				<div class="video-card__placeholder">
					<span>
						<?php esc_html_e( 'No Thumbnail', 'spicy-video' ); ?>
					</span>
				</div>

			<?php endif; ?>

			<span class="video-card__play" aria-hidden="true">
				▶
			</span>

		</a>

	</div>

	<div class="video-card__content">

		<?php
		$categories = get_the_category();

		if ( ! empty( $categories ) ) :
			?>

			<a
				class="video-card__category"
				href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"
			>
				<?php echo esc_html( $categories[0]->name ); ?>
			</a>

		<?php endif; ?>

		<h2 class="video-card__title">

			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>

		</h2>

		<div class="video-card__meta">

			<span class="video-card__date">
				<?php echo esc_html( get_the_date() ); ?>
			</span>

			<span class="video-card__views">
				0 views
			</span>

		</div>

	</div>

</article>
