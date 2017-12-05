<?php get_header(); ?>

		<!-- section -->
		<section>

			<h1><?php single_cat_title(); ?></h1>
			
			 <?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->

<?php get_footer(); ?>
