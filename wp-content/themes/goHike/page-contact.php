<?php 

get_header(); 

?>

<div class="form-wrapper">
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



<?php 

get_footer();