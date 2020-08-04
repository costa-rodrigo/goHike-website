<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="stylesheet" href="https://use.typekit.net/mjr6amh.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <script src="<?php echo get_template_directory_uri();?>/js/main.js" defer></script>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="site-branding">
  
    <?php the_custom_logo(); ?>
  
      <h1 class="site-title">
        <a href="<?php home_url( '/' ); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
  
      <div class="site-description">
        <?php bloginfo('description'); ?>
      </div>  
  
  </div> <!-- .site-branding -->
  <div class="site-navigation-left" id="site-navigation-left">
    <?php
          
      wp_nav_menu(array(
        'theme_location'   =>  'menu-main-left',
        'menu_id'          =>  'menu-primary-left',
        'menu_class'       =>  'menu-primary-left',
        'container'         => 'nav',
        'container_class'   => 'main-menu-left',
      ));
          
    ?>
  </div>
  <div class="site-navigation-right" id="site-navigation-right">
    <?php
          
      wp_nav_menu(array(
        'theme_location'   =>  'menu-main-right',
        'menu_id'          =>  'menu-primary-right',
        'menu_class'       =>  'menu-primary-right',
        'container'         => 'nav',
        'container_class'   => 'main-menu-right',
      ));
          
    ?>
  </div>
  <div id="mobile-menu" class="mobile-menu">
    <a href="javascript:void(0)" class="closebtn" id="close-nav">&times;</a>
    <?php
          
          wp_nav_menu(array(
            'theme_location'   =>  'menu-mobilr',
            'menu_id'          =>  'menu-mobile',
            'menu_class'       =>  'menu-mobile',
            'container'         => 'nav',
            'container_class'   => 'main-menu-mobile',
          ));
              
    ?>
  </div>
  <a href="javascript:void(0);" class="menu-icon" id="open-nav">
    <i class="fa fa-bars"></i>
  </a>
</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">