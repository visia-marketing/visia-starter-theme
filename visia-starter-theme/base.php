<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js" >
  
  <?php get_template_part('templates/site-head'); ?>
  
  <body <?php body_class(); ?>>

    <?php if ( get_field('google_tag_manager_id', 'options') ):?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php the_field('google_tag_manager_id', 'options');?>"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>
    
    <?php do_action('get_header'); ?>
    
    <?php get_template_part('templates/site-header'); ?>
    
    <div class="wrap" role="document">
      <main class="main">
        
        <?php include Wrapper\template_path(); ?>
        
        <?php get_template_part('templates/site-cta-bar'); ?>

      </main><!-- /.main -->
    </div><!-- /.wrap -->
  
    <?php
      do_action('get_footer');
      get_template_part('templates/site-footer');
      wp_footer();
    ?>

  </body>
</html>