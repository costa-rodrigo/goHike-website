<?php ?>

<article <?php post_class(); ?>>

<?php 

?>

 <div class="team-member-information">

 <div class="team-member-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
 
  <h2 class="member-name"><?php the_title(); ?></h2>
 
  <div class="team-member-postion">
    <?php the_field('team_member_position'); ?>
  </div>
 
  <div class="team-member-description">
    <?php the_field('team_member_description'); ?>
  </div>

 </div>
  
 
</article>