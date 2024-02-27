<footer class="main-footer">
  <div class="row">   

    <div class="small-12 medium-5 columns">
      <div class="footer-address">
        <?php the_field('footer_address', 'option'); ?>
      </div>
    </div> 

    <div class="small-12 medium-3 columns">   
      <?php
       if (has_nav_menu('footer_navigation')) :
       wp_nav_menu(['theme_location' => 'footer_navigation', 'depth' => 1, 'menu_class' => 'footer-menu' ]); 
      endif;
      ?>
    </div>

    <div class="small-12 medium-4 columns">
      <div class="footer-about">
        <?php the_field('footer_content', 'option'); ?>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="small-10 small-centered  columns">
      <img src="<?php the_field('footer_large_bottom', 'option'); ?>" class="footer-large-image" />
    </div>
  </div>
</footer>