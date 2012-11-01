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
                echo '<a href="' . $onde[0] . '" target="_blank">'; the_title(); echo '</a>';
              } else {
                the_title();
              }

              // Descrição
              if ($descricao[0] != '') {
                echo '<p class="descricao">' . $descricao[0] . '</p>';
              }

              echo '<br />';

              // Conhecimento
              if ($conhecimento[0] != '') {

                if (count($conhecimento) >= 0) {
                  echo '<p>Conhecimento necessário:</p>';
                }

                echo '<ul class="conhecimento">';

                for ($i = 0; $i < count($conhecimento); ++$i) {
                  echo '<li>' . $conhecimento[$i] . '</li>';
                }

                echo '</ul>';

              }

              echo '<br />';

              // Responsável
              if ($quem[0] != '') {

                if (count($quem) == 0) {
                  echo '<p>Responsável:</p>';
                } else {
                  echo '<p>Responsáveis:</p>';
                }

                echo '<ul class="quem">';

                for ($j = 0; $j < count($quem); ++$j) {
                  echo '<li>' . $quem[$j] . '</li>';
                }

                echo '</ul>';

              }

            ?>

        <br /><br /><br /><br />

        </div>

        <?php endwhile; endif; wp_reset_query(); ?>

      </div>

    </div>

  </section>

  <?php get_footer(); ?>