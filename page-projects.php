<?php /* Template Name: Projects */

  get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <p style="font-size: 16px; text-align: center;">Conheça os projetos que idealizamos e as iniciativas da comunidade que apoiamos.</p>
      <p style="font-size: 16px; text-align: center;">Além disso, saiba quem está por trás deles e como você também pode ajudar.</p>
      <p style="font-size: 16px; text-align: center; margin-bottom: 50px;">Tem uma ideia legal? É só falar com a gente =D</p>

        <?php query_posts('cat=7&showposts=-1'); ?>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

          <div class="project">

            <?php

              $imagem = get_post_custom_values('imagem');
              $onde = get_post_custom_values('onde');
              $site = get_post_custom_values('site');
              $descricao = get_post_custom_values('descricao');
              $quem = get_post_custom_values('quem');
              $conhecimento = get_post_custom_values('conhecimento');

              // Imagem
              if ($imagem[0] != '') {
                echo '<div class="project-media"><a href="http://github.com/' . $onde[0] . '"><img src="' . $imagem[0] . '" alt="Capa do Projeto" /></a></div>';
              }

              // Título
              if ($onde[0] != '') {
                echo '<h1 class="project-name"><a href="http://github.com/' . $onde[0] . '" title="'; the_title(); echo '">'; the_title(); echo '</a></h1>';
              } else {
                echo '<h1 class="project-name">'; the_title(); echo'</h1>';
              }

              // Website
              if ($site[0] != '') {
                echo '<span class="project-website"><strong>website:</strong> <a href="' . $site[0] . '" title="' . $site[0] . '">' . $site[0] . '</a></span>';
              }

              // Descrição
              if ($descricao[0] != '') {
                echo '<p class="project-description">' . $descricao[0] . '</p>';
              }

              // Como posso ajudar?
              echo '<div class="project-issues">';
              echo '<h3 class="project-issues-title">Como posso ajudar?</h3>';
              the_content();
              echo '</div>';

              // Participantes
              if ($onde[0] != '') {
                echo '<ul class="project-contributors" data-repo="' . $onde[0] . '"></ul>';
              }

            ?>

        </div>

        <?php endwhile; endif; wp_reset_query(); ?>

    </div>

  </section>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/projects.js"></script>
  <script>
    $('.project-contributors').githubContributors();
  </script>

  <?php get_footer(); ?>