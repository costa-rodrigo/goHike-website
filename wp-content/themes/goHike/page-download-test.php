<?php 
get_header(); 
?>
<section class="download-gohike">
<?php 
  $args = array(
    'post_type'       =>  'download_content',
    'posts_per_page'  =>  '1',
    'orderby'         =>   'rand'
  );
 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-download-content');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>

<?php
get_footer();