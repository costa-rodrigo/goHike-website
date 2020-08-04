
<?php ?>

<article class="feature-wrapper" <?php post_class(); ?>>
 
  <div class="feature-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>

  <div class="full-feature-description">

  <h2 class="feature-number"><?php the_title(); ?></h2>
 
 <div class="gohike-feature-name">
   <?php the_field('go_hike_features'); ?>
 </div>

 <div class="gohike-feature-description">
   <?php the_field('go_hike_feature_description'); ?>
 </div>

  </div>
 
</article>