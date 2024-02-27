<?php

if ( get_sub_field('class') ): $class = get_sub_field('class'); endif;

if ( get_sub_field('id') ): 
  $id = get_sub_field('id');
else: 
  $seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
  shuffle($seed); // probably optional since array_is randomized; this may be redundant
  $rand = '';
  foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];
  $id = $rand; 
endif;

if ( get_sub_field('style') ): $style = 'style="' . get_sub_field('style') . '"'; endif;

?>


<?php

$seed = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
shuffle($seed); // probably optional since array_is randomized; this may be redundant
$rand = '';
foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

$gallery = $rand;

?>

<div class="flexible-gallery <?php echo $class;?>" id="<?php echo $id;?>" <?php echo $style; ?> > 
  <div class="row">
    <div class="small-12 columns">
      <?php if (get_sub_field('gallery_title')): ?>
        <h2><?php the_sub_field('gallery_title');?></h2>
      <?php endif; ?>
      <div class="gallery" id="g-<?php echo $gallery; ?>">
        <div class="row small-up-2 medium-up-4" data-equalizer>
          <?php $images = get_sub_field('gallery'); ?>
          <?php if( $images ): ?>
          <?php foreach( $images as $image ): ?>
          <div class="column column-block">
            <a href="<?php echo $image['sizes']['large']; ?>" data-lightbox="gallery" class="thumbnail" data-alt="<?php echo $image['alt']; ?>" data-title="<?php echo $image['caption']; ?>" data-equalizer-watch>
              <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="fit"  />
            </a>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>