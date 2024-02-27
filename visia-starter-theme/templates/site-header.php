<?php if (has_nav_menu('top_navigation')) : ?>
<div class="top-header">
	<div class="row">
		<div class="small-12 columns">
			<?php
        wp_nav_menu(['theme_location' => 'top_navigation', 'depth' => 1, 'menu_class' => 'top-header-navigation top-header-navigation-right']); 
      ?>
		</div>
	</div>
</div>
<?php endif; ?>

<header class="main-header">
	<div class="row">
		<div class="small-5 medium-3 columns">
			<a href="<?= esc_url(home_url('/')); ?>" class="main-logo"><img src="<?php the_field('main_logo', 'option');?>" alt="<?php bloginfo('name'); ?>"></a>
		</div>
		<div class="small-2 small-offset-5 columns hide-for-medium">
			<div class="title-bar" data-responsive-toggle="primary-navigation" data-hide-for="medium">
  			<button class="menu-icon" type="button" data-toggle="primary-navigation"></button>
			</div>
		</div>
		<div class="small-12 medium-9 columns">
			<?php
        if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'depth' => 3, 'menu_class' => 'vertical medium-horizontal menu primary-navigation', 'items_wrap' => '<ul class="%2$s" id="primary-navigation" data-responsive-menu="drilldown medium-dropdown">%3$s</ul>' ]); 
	        endif;
	      ?>
		</div>
	</div>
</header>