<?php if( have_rows('flexible_content') ): ?>

  <section class="flexible-content">

  <?php while ( have_rows('flexible_content') ) : the_row(); ?>

    <?php if( get_row_layout() == 'large_title' ): ?>
      <?php get_template_part('flexible/flexible-large-title'); ?>
    
    <?php elseif( get_row_layout() == 'large_text' ): ?>
      <?php get_template_part('flexible/flexible-large-text'); ?>
    
    <?php elseif( get_row_layout() == 'section_title' ): ?>
      <?php get_template_part('flexible/flexible-section-title'); ?>

    <?php elseif( get_row_layout() == 'single_column' ): ?>
      <?php get_template_part('flexible/flexible-single-column'); ?>

    <?php elseif( get_row_layout() == 'two_columns' ): ?>
      <?php get_template_part('flexible/flexible-two-columns'); ?>

    <?php elseif( get_row_layout() == 'three_columns' ): ?>
      <?php get_template_part('flexible/flexible-three-columns'); ?>
      
    <?php elseif( get_row_layout() == 'four_columns' ): ?>
      <?php get_template_part('flexible/flexible-four-columns'); ?>
  
    <?php elseif( get_row_layout() == 'left_sidebar' ): ?>
      <?php get_template_part('flexible/flexible-left-sidebar'); ?>

    <?php elseif( get_row_layout() == 'right_sidebar' ): ?>
      <?php get_template_part('flexible/flexible-right-sidebar'); ?>

    <?php elseif( get_row_layout() == 'hr' ): ?>
      <?php get_template_part('flexible/flexible-hr'); ?>

    <?php elseif( get_row_layout() == 'gallery' ): ?>
      <?php get_template_part('flexible/flexible-gallery'); ?>

    <?php elseif( get_row_layout() == 'blocks' ): ?>

      <?php $callout = get_sub_field('callout'); ?>
      
      <div class="flexible-columns flexible-blocks <?php the_sub_field('class');?>" id="<?php the_sub_field('id');?>" <?php if ( get_sub_field('style') ): echo 'style="' . get_sub_field('style') . '"'; endif;?> > 
        <div class="row">
          <?php if( get_sub_field('title') ): ?>
            <div class="small-12 columns">
              <h2><?php the_sub_field('title');?></h2>
            </div>
          <?php endif; ?>
          <div class="small-12 columns"> 
            <div class="row small-up-2 medium-up-<?php the_sub_field('blocks_per_row');?>" data-equalizer>
              <?php if( have_rows('blocks') ): ?>
              <?php while ( have_rows('blocks') ) : the_row(); ?>
                <div class="column column-block">
                  <div class="<?php if( $callout ): echo 'callout'; else: echo 'block-wrapper'; endif; ?>" data-equalizer-watch>
                    <?php the_sub_field('block');?>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    <?php elseif( get_row_layout() == 'full_image' ): ?>
      
      <div class="flexible-image clearfix">
        <?php $image_full = get_sub_field('image_full'); ?>
        <?php if( !empty( $image_full ) ): ?>
           <img src="<?php echo esc_url($image_full['url']); ?>" alt="<?php echo esc_attr($image_full['alt']); ?>" class="flexible-full-image" />
        <?php endif; ?>
      </div>

    <?php elseif( get_row_layout() == 'split_image' ): ?>
      
      <div class="flexible-image clearfix">
        <?php $image_left = get_sub_field('image_left'); ?>
        <?php if( !empty( $image_left ) ): ?>
           <img src="<?php echo esc_url($image_left['url']); ?>" alt="<?php echo esc_attr($image_left['alt']); ?>" class="flexible-split-image-left" />
        <?php endif; ?>

        <?php $image_right = get_sub_field('image_right'); ?>
        <?php if( !empty( $image_right ) ): ?>
           <img src="<?php echo esc_url($image_right['url']); ?>" alt="<?php echo esc_attr($image_right['alt']); ?>" class="flexible-split-image-right" />
        <?php endif; ?>
      </div>

    
      

     <?php endif; ?>

  <?php endwhile; ?> 

  </section>

<?php endif; ?>
