<?php get_header(); ?>


		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'ultraPhoto' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
