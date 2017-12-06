<?php get_header(); ?>


	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<!-- post title -->
			<h1>
				<?php the_title(); ?>
			</h1>
			<!-- /post title -->

			<?php the_content(); // Dynamic Content ?>
			
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('post-bottom-content-widget')) ?>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'ultraPhoto' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->


<?php get_footer(); ?>
