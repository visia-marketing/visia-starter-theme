<?php while (have_posts()) : the_post(); ?>
  
<article class="home-page">

	<section class="hero">
		<?php $desktop_image = get_field('background_image'); ?>
    <?php if( !empty( $desktop_image ) ): ?>
       <img src="<?php echo esc_url($desktop_image['url']); ?>" alt="<?php echo esc_attr($desktop_image['alt']); ?>" class="hero-background" />
    <?php endif; ?>
		<?php $hero_content = get_field('hero_content');?>
		<?php if( $hero_content ): ?>
    	<div class="hero-content">
				<img src="<?php echo $hero_content['banner_image']; ?>" />
		    <h1><?php echo $hero_content['title']; ?></h1>
		    <p><?php echo $hero_content['subtitle']; ?></p>							
			</div>
		<?php endif; ?>	
	</section>

</article>
  
<?php endwhile; ?>
