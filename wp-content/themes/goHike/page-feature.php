<?php 

get_header(); 

?>

<h2 class=feature-title><?php the_excerpt();?></h2>

<section class="features">
<?php 
  $args = array(
    'post_type'       =>  'gohike_features',
    'posts_per_page'  =>  '4',
    'orderby' => 'time',
    'order'   => 'ASC',
  );
 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-features');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>
<?php 

get_footer();