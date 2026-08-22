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

			<div>
				<p class="homepage__eyebrow">
					<?php esc_html_e( 'Discover', 'spicy-video' ); ?>
				</p>

				<h1>
					<?php esc_html_e( 'Latest Videos', 'spicy-video' ); ?>
				</h1>

				<p class="homepage__description">
					<?php esc_html_e( 'Discover the latest videos and trending content.', 'spicy-video' ); ?>
				</p>
			</div>

		</header>

		<?php
		$video_query = new WP_Query(
			array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'posts_per_page' => 12,
				'paged'          => max( 1, get_query_var( 'paged' ) ),
			)
		);
		?>

		<?php if ( $video_query->have_posts() ) : ?>

			<div class="video-grid">

				<?php
				while ( $video_query->have_posts() ) :
					$video_query->the_post();

					get_template_part( 'template-parts/video-card' );
				endwhile;
				?>

			</div>

			<?php
			wp_reset_postdata();
			?>

		<?php else : ?>

			<div class="no-videos">

				<h2>
					<?php esc_html_e( 'No videos found', 'spicy-video' ); ?>
				</h2>

				<p>
					<?php esc_html_e( 'Publish your first post to display a video here.', 'spicy-video' ); ?>
				</p>

			</div>

		<?php endif; ?>

	</section>

</div>

<?php
get_footer();
