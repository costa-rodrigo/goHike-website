<?php 

get_header(); 

?>

<div class="error-main">
 <div class="error-content">
    <span class="404-error">404</span>
    <p>Looks like you got lost in the woods</p> 
    <p>This trail doesn't exist. Let's get back on the right one.</p>
    <div class="button"><a href="<?php echo home_url(); ?>" class="home-button home-button-animated ">Go Back Home</a>
    </div>
 </div>
</div>


<?php 
  get_footer();