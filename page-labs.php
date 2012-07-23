<?php get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <section class="content">

    <div class="wrapper">

      <article class="labs single-page">

        <h3>Last experiment</h3>
        <br/><br/>

        <?php query_posts('cat=5&showposts=15'); ?>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
            <div class="last-exp">
              <a href="<?php echo excerpt(100); ?>" target="_blank">
                  <?php if ( has_post_thumbnail() ) the_post_thumbnail('img-experiment'); ?>
              </a>
              <div class="desc">
                <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
                <?php the_content(); ?>
              </div>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>

      </article>

    </div>

  </section>
      
    </div>

  </section>

  <?php get_footer(); ?>