<?php /* Template Name: Events */

  get_header(); ?>

  <section class="content">

    <div class="wrapper">

        <?php query_posts('cat=3&showposts=-1&order=ASC'); ?>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

          <div class="event">
            <div class="event-media">
              <a href="<?php echo excerpt(100); ?>" title="<?php the_title(); ?>">

              <?php

                $imagem = get_post_custom_values('imagem');

                // Imagem
                if ($imagem[0] != '') {
                  echo '<img src="' . $imagem[0] . '" alt="" />';
                }

              ?>

              <span class="event-date"><?php the_time('d/m'); ?></span>

              <?php

                $preco = get_post_custom_values('preco');

                // Preço
                if ($preco[0] != '') {
                  echo '<span class="event-price">R$ ' . $preco[0] . '</span>';
                }

              ?>

              </a>
            </div>
            <h1 class="event-name"><a href="#" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <span class="event-city"><?php the_content(); ?></span>
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