                                <?php  /* Template Name: Welcome Page */  get_header(); ?> 
<div id="dvLoading"></div> 
<main role="main">
<div id="slider" class="bxsliderWrapper" style="display:none;">
    <?php
    $myposts = get_posts('numberposts=15&category_name=Featured');
    foreach($myposts as $post) : ?>
    <div class="homeSlider">
      <div class="homeSlides" style="background-image:url('<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>');background-position:<?php the_field('position'); ?>;">
          <h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
          </div>
  </div> 
<?php endforeach; ?>
    </div>
    </main>
<?php get_footer(); ?>
                            