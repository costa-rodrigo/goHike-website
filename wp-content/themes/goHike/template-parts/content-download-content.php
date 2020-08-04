<?php ?>

<article class="download-content-wrapper" <?php post_class(); ?>>
 
 <div class="gohike-download-title">
   <?php the_field('go_hike_download_content'); ?>
 </div>


 <div class="gohike-download-description">
   <?php the_field('download_app_to_start'); ?>
 </div>

 <div class="feature-thumbnail-download">
    <?php the_post_thumbnail(); ?>
  </div>

 <div class="gohike-download-button">
 <a href="<?php echo home_url("/download"); ?>"><?php the_field('go_hike_download_button'); ?></a>
 </div>
  
</article>