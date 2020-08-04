<?php

if ( ! function_exists( 'gohike_setup' ) ) :
 
   function gohike_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo', array(
      'height'      => 200,
      'width'       => 200,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array( 'site-title', 'site-description' ),
     ) );

     register_nav_menus(array(
      'menu-main-left'     =>    'Main Menu Left',
      'menu-main-right'     =>    'Main Menu Right',
      'menu-mobile'   =>    'Mobile Menu',
      'menu-social'   =>    'Social Menu',
      'menu-footer'   =>    'Footer Menu'
     ));

   }
 
endif;
 
add_action('after_setup_theme', 'gohike_setup');
 
function gohike_scripts_styles(){
   wp_enqueue_style('gohike_style', get_stylesheet_uri());
}
 
add_action('wp_enqueue_scripts', 'gohike_scripts_styles');