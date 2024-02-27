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

<div class="flexible-columns <?php echo $class;?>" id="<?php echo $id;?>" <?php echo $style; ?>  > 
  <div class="row">
    <div class="small-12 <?php if (get_sub_field('column_widths') == 25): echo 'medium-9'; else: echo 'medium-8'; endif; ?> columns">
      <div class="flexible-column-wrapper <?php if(get_sub_field('column_1_wrapper_class')): the_sub_field('column_1_wrapper_class'); endif; ?>" data-equalizer-watch>
        <?php the_sub_field('column_1');?>
      </div>
    </div>
    <div class="small-12 <?php if (get_sub_field('column_widths') == 25): echo 'medium-3'; else: echo 'medium-4'; endif; ?> columns">
      <div class="flexible-column-wrapper <?php if(get_sub_field('column_2_wrapper_class')): the_sub_field('column_2_wrapper_class'); endif; ?>" data-equalizer-watch>
        <?php the_sub_field('column_2');?>
      </div>
    </div>
  </div>
</div>