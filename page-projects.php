<?php /* Template Name: Projects */

  get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <p style="font-size: 16px; text-align: center;">Conheça os projetos que idealizamos e as iniciativas da comunidade que apoiamos.</p>
      <p style="font-size: 16px; text-align: center;">Além disso, saiba quem está por trás deles e como você também pode ajudar.</p>
      <p style="font-size: 16px; text-align: center; margin-bottom: 50px;">Tem uma ideia legal? É só falar com a gente =D</p>

        <?php
          query_posts('cat=7&showposts=-1'); 
          $projetos = array();
        ?>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post();

              $html = '<div class="project">';

              $imagem = get_post_custom_values('imagem');
              $onde = get_post_custom_values('onde');
              $site = get_post_custom_values('site');
              $descricao = get_post_custom_values('descricao');
              $quem = get_post_custom_values('quem');
              $conhecimento = get_post_custom_values('conhecimento');

              // Imagem
              if ($imagem[0] != '') {
                $html .= '<div class="project-media"><a href="http://github.com/' . $onde[0] . '"><img src="' . $imagem[0] . '" alt="Capa do Projeto" /></a></div>';
              }

              // Título
              if ($onde[0] != '') {
                $html .= '<h1 class="project-name"><a href="http://github.com/' . $onde[0] . '" title="' . get_the_title() . '">' . get_the_title() . '</a></h1>';

                // Busca no github o número de stars para ordenar depois,
                //$git_url = "https://api.github.com/repos/" . $onde[0] ;
                $git_url = "https://api.github.com/repos/" . $onde[0] ;
                $ch = curl_init( $git_url ) ;
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $git_repo = curl_exec( $ch );
                $git_repo = json_decode( $git_repo , true );

                $projetos{get_the_ID()}{"stars"} = $git_repo{"watchers_count"} ;

              } else {
                $html .= '<h1 class="project-name">' . get_the_title() . '</h1>';
                $projetos{get_the_ID()}{"stars"} = 0 ;
              }

              // Website
              if ($site[0] != '') {
                $html .= '<span class="project-website"><strong>website:</strong> <a href="' . $site[0] . '" title="' . $site[0] . '">' . $site[0] . '</a></span>';
              }

              // Descrição
              if ($descricao[0] != '') {
                $html .= '<p class="project-description">' . $descricao[0] . '</p>';
              }

              // Como posso ajudar?
              $html .= '<div class="project-issues">';
              $html .= '<h3 class="project-issues-title">Como posso ajudar?</h3>';
              $html .= get_the_content();
              $html .= '</div>';

              // Participantes
              if ($onde[0] != '') {
                $html .= '<ul class="project-contributors" data-repo="' . $onde[0] . '"></ul>';
              }

              $html .= '</div>';

              $projetos{get_the_ID()}{"html"} = $html ;
            
            endwhile; endif; wp_reset_query(); ?>

        <?php
          usort( $projetos , function( $a, $b ) {
            if( $a{"stars"} == $b{"stars"} ) { return 0; }
            return( $a{"stars"} > $b{"stars"} ) ? -1 : 1;
          } );
          foreach( $projetos as $projeto ) {
            echo $projeto{"html"} ;
          }
        ?>

    </div>

  </section>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/projects.js"></script>
  <script>
    $('.project-contributors').githubContributors();
  </script>

  <?php get_footer(); ?>