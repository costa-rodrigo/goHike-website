<?php 

get_header(); 

?>

<div class="about-content-wrapper">

<h2 class="the-story-title"><?php the_title();?></h2>

<?php

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    the_content();
    
  endwhile;
else :
  echo 'Nothing found';
endif;

?>

</div>

<section class="team-members">
<h2 class="our-team-title">Our Team</h2>
 
<?php 
  $args = array(
    'post_type'       =>  'team_member',
    'posts_per_page'  =>  '6',
    'orderby' => 'time',
    'order'   => 'ASC',

  );
 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-team-member');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>

<?php 

get_footer();