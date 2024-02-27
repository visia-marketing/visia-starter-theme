<article class="blog-single">

<?php get_template_part('templates/page-breadcrumbs'); ?>

<section class="blog-content">
    <div class="row">
      <div class="small-12 medium-8 columns">
      
        <?php get_template_part('templates/content-single', get_post_type()); ?>

        <?php the_posts_navigation(); ?>

      </div>

      <div class="small-12 medium-4 columns">

      	<?php get_template_part('templates/post-sidebar'); ?>

      </div>

    </div>
  </section>

</article>