                                <?php  /* Template Name: Template Home Page */  get_header(); ?> 
<div id="dvLoading"></div> 
<main role="main">
<div id="slider" class="bxsliderWrapper" style="display:none;">
    <?php
    $myposts = get_posts('numberposts=15&category_name=Featured');
    foreach($myposts as $post) : ?>
    <div class="homeSlider">
      <?php
            if ( wp_is_mobile() ) { ?>
                <div class="homeSlides" style="background-image:url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homepage-slider-mobile' ); echo $thumb['0'];?>');background-position:<?php the_field('position'); ?>;">
                
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
              </div>
                
         <?php   } else { ?>
               
                <div class="homeSlides" style="background-image:url('<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'homepage-slider' ); echo $thumb['0'];?>');background-position:<?php the_field('position'); ?>;">
                
                    <h2>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h2>
              </div>
                
                
         <?php  } ?>
  </div> 
<?php endforeach; ?>
    </div>
    </main>
<?php get_footer(); ?>