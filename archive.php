<?php get_header(); ?>

		<!-- section -->
		<section>

			<h1><?php _e( 'Archives', 'ultraPhoto' ); ?></h1>
            
			 <?php get_template_part('loop'); ?>
			
			<br>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

<?php get_footer(); ?>
