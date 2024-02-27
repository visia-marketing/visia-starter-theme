<article <?php post_class('blog-entry'); ?> data-equalizer-watch>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-excerpt">
    <?php the_excerpt(); ?>
  </div>
  <a href="<?php the_permalink(); ?>" class="read-more">Read More <i class="fal fa-long-arrow-right"></i></a>
</article>
