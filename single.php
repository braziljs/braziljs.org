<?php get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <div class="blog">
        <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
      
          <h3><?php the_title(); ?></h3>

          <?php the_content(); ?>

        <?php endwhile; endif; wp_reset_query(); ?>
      </div>
      
    </div>

  </section>

  <?php get_footer(); ?>