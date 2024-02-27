<?php $page_ID = get_query_var( 'page_id', 'page_ID' ); ?>

<?php if( have_rows('flexible_content', $page_ID) ): ?>
<section class="flexible-content">
<?php while ( have_rows('flexible_content', $page_ID) ) : the_row(); ?>

    <?php 

    /* Get Options */ 

    $attr_class = get_sub_field('class');
    $bg_class = 'bg-' . get_sub_field('background_color');
    
    $attr_id = get_sub_field('id');
    $style = get_sub_field('style');

    $equal_heights = get_sub_field('use_equal_heights');

    ?>

  <div class="flexible-section <?php if ( get_sub_field('class') ): echo $attr_class; endif; ?> <?php if ( get_sub_field('background_color') ): echo $bg_class; endif; ?> <?php if ( get_sub_field('background_image') ): echo 'has-image'; endif; ?> "

    <?php if ( get_sub_field('id') ): echo 'id="' . $attr_id . '"'; endif; ?> 

    <?php if ( get_sub_field('style') ): echo 'style="' . $style . '"'; endif; ?>>

    <?php $image = get_sub_field('background_image'); ?>
    <?php if( !empty( $image ) ): ?>
       <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="flexible-section-background-image" />
    <?php endif; ?>

    <?php if( have_rows('content') ): ?>
    <?php while ( have_rows('content') ) : the_row(); ?>

      <?php if( get_row_layout() == 'section_title' ): ?>

        <div class="row section-title">
          <div class="small-12 columns">
            <<?php the_sub_field('header');?> class="<?php the_sub_field('style');?> <?php the_sub_field('color');?>">
              <?php the_sub_field('title');?>
            </<?php the_sub_field('header');?>>
          </div>
        </div>

      <?php elseif( get_row_layout() == 'single_column' ): ?>

        <div class="row single-column">
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 columns">
              <div class="flexible-cell <?php if( get_sub_field('column_1_class') ): the_sub_field('column_1_class'); endif; ?>"><?php the_sub_field('column_1');?></div>
            </div>     
          <?php endif; ?>
        </div>

      <?php elseif( get_row_layout() == 'two_columns' ): ?>

        <div class="row two-columns"  <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 medium-6 columns">
              <div class="flexible-cell <?php if( get_sub_field('column_1_class') ): the_sub_field('column_1_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_1');?></div>
            </div>
          <?php endif; ?>
          <?php if( get_sub_field('column_2') ): ?>
            <div class="small-12 medium-6 columns end">
              <div class="flexible-cell <?php if( get_sub_field('column_2_class') ): the_sub_field('column_2_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_2');?></div>
            </div>     
          <?php endif; ?>
        </div> 

      <?php elseif( get_row_layout() == 'three_columns' ): ?>

        <div class="row three-columns" <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 medium-4 columns">
              <div class="flexible-cell <?php if( get_sub_field('column_1_class') ): the_sub_field('column_1_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_1');?></div>
            </div>
          <?php endif; ?>
          <?php if( get_sub_field('column_2') ): ?>
            <div class="small-12 medium-4 columns end">
              <div class="flexible-cell <?php if( get_sub_field('column_2_class') ): the_sub_field('column_2_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_2');?></div>
            </div>     
          <?php endif; ?>
          <?php if( get_sub_field('column_3') ): ?>
            <div class="small-12 medium-4 columns end">
              <div class="flexible-cell <?php if( get_sub_field('column_3_class') ): the_sub_field('column_3_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_3');?></div>
            </div>     
          <?php endif; ?>
        </div> 

      <?php elseif( get_row_layout() == 'four_columns' ): ?>

        <div class="row four-columns" <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 medium-3 columns">
              <div class="flexible-cell <?php if( get_sub_field('column_1_class') ): the_sub_field('column_1_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_1');?></div>
            </div>
          <?php endif; ?>
          <?php if( get_sub_field('column_2') ): ?>
            <div class="small-12 medium-3 columns end">
              <div class="flexible-cell <?php if( get_sub_field('column_2_class') ): the_sub_field('column_2_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_2');?></div>
            </div>     
          <?php endif; ?>
          <?php if( get_sub_field('column_3') ): ?>
            <div class="small-12 medium-3 columns end">
              <div class="flexible-cell <?php if( get_sub_field('column_3_class') ): the_sub_field('column_3_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_3');?></div>
            </div>     
          <?php endif; ?>
          <?php if( get_sub_field('column_4') ): ?>
            <div class="small-12 medium-3 columns end">
              <div class="flexible-cell <?php if( get_sub_field('column_4_class') ): the_sub_field('column_4_class'); endif; ?>" data-equalizer-watch><?php the_sub_field('column_4');?></div>
            </div>     
          <?php endif; ?>
        </div> 

      <?php elseif( get_row_layout() == 'left_content' ): ?>

        <div class="row left-content" <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 medium-8 columns">
              <div class="flexible-cell" data-equalizer-watch><?php the_sub_field('column_1');?></div>
            </div>
          <?php endif; ?>
          <?php if( get_sub_field('column_2') ): ?>
            <div class="small-12 medium-4 columns end">
              <div class="flexible-cell" data-equalizer-watch><?php the_sub_field('column_2');?></div>
            </div>     
          <?php endif; ?>
        </div> 

      <?php elseif( get_row_layout() == 'right_content' ): ?>

        <div class="row right-content" <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 medium-4 columns" >
              <div class="flexible-cell" data-equalizer-watch><?php the_sub_field('column_1');?></div>
            </div>
          <?php endif; ?>
          <?php if( get_sub_field('column_2') ): ?>
            <div class="small-12 medium-8 columns end">
              <div class="flexible-cell" data-equalizer-watch><?php the_sub_field('column_2');?></div>
            </div>     
          <?php endif; ?>
        </div>

      <?php elseif( get_row_layout() == 'landing_page_intro' ): ?>

        <div class="row landing-intro" <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <?php if( get_sub_field('column_1') ): ?>
            <div class="small-12 medium-7 columns">
              <div class="flexible-cell" data-equalizer-watch><?php the_sub_field('column_1');?></div>
            </div>
          <?php endif; ?>
          <?php if( get_sub_field('column_2') ): ?>
            <div class="small-12 medium-5 columns end">
              <div class="flexible-cell" data-equalizer-watch><?php the_sub_field('column_2');?></div>
            </div>     
          <?php endif; ?>
        </div> 

      <?php elseif( get_row_layout() == 'gallery' ): ?>

        <div class="row small-up-2 medium-up-3 large-up-4 gallery">

          <?php $images = get_sub_field('gallery'); ?>
          <?php if( $images ): ?>
          <?php foreach( $images as $image ): ?>
          <div class="column column-block" >
            <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="gallery" class="thumbnail" data-alt="<?php echo $image['alt']; ?>" data-title="<?php echo $image['caption']; ?>" >
              <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="fit"  />
            </a>
            <br>
            <strong><?php echo $image['description']; ?></strong>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>

        </div>

      <?php elseif( get_row_layout() == 'downloads' ): ?>

        <?php $post_objects = get_sub_field('downloads'); ?>   
        <?php if( $post_objects ): ?> 
        <div class="row small-up-2 medium-up-5 large-up-5 downloads">
          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <div class="column column-block" >
            <?php setup_postdata($post); ?>
              <a href="<?php the_permalink(); ?>" target="_blank" title="<?php the_title();?>"><?php the_post_thumbnail( 'thumb' );?></a>
              <br>
              <a href="<?php the_permalink(); ?>" target="_blank"><?php the_title();?></a>
            <?php wp_reset_postdata(); ?>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>

      <?php elseif( get_row_layout() == 'line_break' ): ?>

        <div class="row single-column" <?php if( $equal_heights ): echo 'data-equalizer'; endif; ?>>
          <div class="small-12 columns">
            <hr>
          </div>
        </div> 

      <?php endif; ?>

      <?php endwhile; ?>
      <?php endif; ?> 
    
  </div>

<?php endwhile; ?> 
</section>
<?php endif; ?>
