<?php /* Template Name: Events */

  get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <h2>Eventos</h2>

        <?php query_posts('cat=3&showposts=-1'); ?>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

          <div>

            <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
            <p><?php the_content(); ?></p>

            <?php

              $preco = get_post_custom_values('preco');

              // Título
              if ($preco[0] != '') {
                echo '<p>Preço: ' . $preco[0] . '</p>';
              }

             ?>

            <div class="date">
              <p class="day"><?php the_time('d'); ?></p>
              <p class="month"><?php the_time('M'); ?></p>
            </div>

          </div>

        <?php endwhile; endif; wp_reset_query(); ?>

    </div>

  </section>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/projects.js"></script>
  <script>
    $('.members').githubContributors();
  </script>

  <?php get_footer(); ?>