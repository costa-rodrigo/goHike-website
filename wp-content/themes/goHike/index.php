<?php 

get_header(); 

?>
<section class="custom-header">
<?php 
  $args = array(
    'post_type'       =>  'custom_header',
  );
 
  $my_query = new WP_Query( $args );
 
  if ( $my_query->have_posts() ) :
    while ( $my_query->have_posts() ) :
      $my_query->the_post();
      get_template_part('template-parts/content-header');
    endwhile;
  else :
    get_template_part('template-parts/content-none.php');
  endif;
?>
</section>


<h2 class="feature-title">Why go hike?</h2>

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

  <section class="slider">
  <?php echo do_shortcode('[metaslider id="185"]'); ?>
  </section>

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
  
  