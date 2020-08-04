<?php ?>

  <footer class="site-footer" id="site-footer">

  <?php the_custom_logo(); ?>

  <div class="footer-menu-wrapper">

  <div class="footer-menu">
    <?php
          
      wp_nav_menu(array(
        'theme_location'   =>  'menu-footer',
        'menu_id'          =>  'main-menu-footer',
        'menu_class'       =>  'menu-footer',
        'container'         => 'nav',
        'container_class'   => 'main-menu-footer',
      ));
          
    ?>

    </div>

  <div class="social-menu">
    <?php
          
      wp_nav_menu(array(
        'theme_location'   =>  'menu-social',
        'menu_id'          =>  'menu-social-footer',
        'menu_class'       =>  'menu-social',
        'container'         => 'nav',
        'container_class'   => 'main-social',
      ));
          
    ?>

    </div>

  </div>

  <div class="footer-content">
    <p>Have questions? Email us at hello@gohike.co</p>
    <p class="copyright-gohike">© 2020 Go Hike. All rights reserved.</p>

  </div>
 
    
  </footer>
  </main>   <!-- .site-main -->
</div>      <!-- .content-area -->
<?php wp_footer(); ?>
</body>
</html>