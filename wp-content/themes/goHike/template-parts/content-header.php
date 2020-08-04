<?php ?>

<article class="header-content-wrapper" <?php post_class(); ?>
style=
    "background-image: url('<?php the_field('background_image'); ?>'); 
     background-size: cover; 
     background-repeat: no-repeat";>
 
 <div class="gohike-header-title">
   <?php the_field('custom_header_content'); ?>
 </div>


 <div class="gohike-header-description">
   <?php the_field('custom_header_description'); ?>
 </div>



 <div class="gohike-header-button">
 <a href="<?php echo home_url("/download"); ?>"><?php the_field('header_download_button'); ?></a>
 </div>
  
</article>