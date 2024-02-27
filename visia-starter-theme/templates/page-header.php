<?php if ( ! get_field('hide_header') ) : ?>

  <?php $image = get_field('header_image'); ?>

  <header class="page-header <?php if( empty( $image ) ): echo 'no-image'; else: echo 'has-image'; endif; ?>">
    
    <?php if( !empty( $image ) ): ?>
       <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="page-header-image page-header-image-cover" />
    <?php endif; ?>

    <?php if( have_rows('header_content') ): ?>
    <?php while( have_rows('header_content') ): the_row(); ?>

      <div class="page-header-content-div page-header-content-div-left">
        <div class="row">
          <div class="small-12 medium-8 columns">
            <div class="page-header-content">
              <h1><?php if ( get_sub_field('title') ): the_sub_field('title'); else: the_title(); endif; ?></h1>
              <?php if ( get_sub_field('subtitle') ): echo '<p>' . get_sub_field('subtitle') . '</p>'; endif; ?>
            </div>
          </div>
        </div>
      </div>
        
    <?php endwhile; ?>
    <?php endif; ?>

  </header>

<?php endif; ?>

<?php if ( get_field('show_breadcrumbs') ): ?>
  <?php get_template_part('templates/page-breadcrumbs'); ?>
<?php endif; ?>

<?php if ( ! get_field('hide_header') ) : ?>

  <header class="page-header-none <?php the_sub_field('align'); ?>">
    <div class="row">
      <div class="small-12 columns">
        <h1><?php the_title();?></h1>
      </div>
    </div>
  </header>

<?php endif; ?>