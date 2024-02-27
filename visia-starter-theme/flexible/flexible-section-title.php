<?php

if ( get_sub_field('class') ): $class = get_sub_field('class'); endif;

if ( get_sub_field('id') ): $id = get_sub_field('id'); endif;

if ( get_sub_field('style') ): $style = 'style="' . get_sub_field('style') . '"'; endif;

?>

<div class="flexible-section-title <?php echo $class;?>" id="<?php echo $id;?>" <?php echo $style; ?> > 
  <div class="row">
    <div class="small-12 columns">
      <h2><?php the_sub_field('section_title');?></h2>
    </div>
  </div>
</div>