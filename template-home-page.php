<?php  /* Template Name: Template Home Page */  get_header(); ?>  
<main role="main">
<div id="slider" class="bxsliderWrapper hide">
    <?php
    $myposts = get_posts('numberposts=15&category_name=Featured');
    foreach($myposts as $post) : ?>
      <div class="homeSlider">
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<?php the_post_thumbnail('full'); // Declare pixel size you need inside the array ?>
		      <?php endif; ?>
          <h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
  </div> 
<?php endforeach; ?>
    </div>
    </main>
<?php get_footer(); ?>