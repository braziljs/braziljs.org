<?php include 'header.php' ?>

  <section class="content">

    <div class="wrapper" style="width: 700px;">

      <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

      <article class="content-blog">

        <h2 style="text-align: left;"><?php the_excerpt(); ?></h2>
        
          <?php the_content(); ?>

          <p><a href="<?php the_permalink(); ?>">Continue Lendo...</a></p>

        <br>

      </article>

      <?php endwhile; endif; wp_reset_query(); ?>

    </div>

  </section>

<?php get_footer(); ?>