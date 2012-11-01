<?php /* Template Name: Projects */

  get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <h2>Projetos</h2>

        <?php query_posts('cat=7&showposts=-1'); ?>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

          <div>

            <?php

              $onde = get_post_custom_values('onde');
              $descricao = get_post_custom_values('descricao');
              $quem = get_post_custom_values('quem');
              $conhecimento = get_post_custom_values('conhecimento');

              // Título
              if ($onde[0] != '') {
                echo '<a href="http://github.com/' . $onde[0] . '" target="_blank">'; the_title(); echo '</a>';
              } else {
                the_title();
              }

              // Descrição
              if ($descricao[0] != '') {
                echo '<p class="descricao">' . $descricao[0] . '</p>';
              }

              echo '<br />';

              // Como posso ajudar?
              echo '<p>Como posso ajudar?</p>';
              the_content();

              echo '<br />';

              // Participantes
              if ($onde[0] != '') {
                echo '<p>Participantes:</p>';
                echo '<ul class="members" data-repo="' . $onde[0] . '"></ul>';
              }

            ?>

        <br /><br /><br /><br />

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