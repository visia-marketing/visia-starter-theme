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

<div class="flexible-large-title <?php echo $class;?>" id="<?php echo $id;?>" <?php echo $style; ?> > 
  <div class="row">
    <div class="small-12 columns">
      <h2><?php the_sub_field('large_title');?></h2>
    </div>
  </div>
</div>