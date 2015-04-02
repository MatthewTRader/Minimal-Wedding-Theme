                                <?php  /* Template Name: Template Home Page */  get_header(); ?> 
<div id="dvLoading"></div> 
<main role="main">
<div id="slider" class="bxsliderWrapper" style="display:none;">
    <?php
    $myposts = get_posts('numberposts=15&category_name=Featured');
    foreach($myposts as $post) : ?>
      <div class="homeSlider" style="background-image:url('<?php the_field('slide_image'); ?>');background-position:<?php the_field('position'); ?>;">
          <h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
  </div> 
<?php endforeach; ?>
    </div>
    </main>
<?php get_footer(); ?>
                            