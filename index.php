<?php get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <h2><span>Fique por dentro de algumas das nossas iniciativas!</span></h2>

      <ul class="projects" id="projects">

        <li class="project-1">
          <figure>
            <span class="sprite-home sprite-community project-figure"></span>
          </figure>
          <h4>Comunidade</h4>
          <p>Mantenha-se antenado no que somos, como pensamos e o que estamos fazendo.</p>
          <div class="sprite-home sprite-arrow"></div>
        </li>

        <li class="project-2">
          <figure>
            <span class="sprite-home sprite-conf project-figure"></span>
          </figure>
          <h4>Eventos</h4>
          <p>Confira os próximos eventos de desenvolvimento front-end que estamos apoiando pelo Brasil.</p>
          <div class="sprite-home sprite-arrow"></div>
        </li>

        <li class="project-3">
          <figure>
            <span class="sprite-home sprite-cast project-figure"></span>
          </figure>
          <h4>Podcast</h4>
          <p>Trazendo novidades, entrevistas e multiplicando conhecimento sobre desenvolvimento web.</p>
          <div class="sprite-home sprite-arrow"></div>
        </li>

        <li class="project-4">
          <figure>
            <span class="sprite-home sprite-weekly project-figure"></span>
          </figure>
          <h4>Weekly</h4>
          <p>Seleção semanal que reúne as melhores novidades sobre desenvolvimento web no Brasil.</p>
          <div class="sprite-home sprite-arrow"></div>
        </li>

      </ul>

      <div class="highlights news" id="news">

        <?php query_posts('cat=3&showposts=3'); ?>

          <h5><?php single_cat_title() ?></h5>

          <ul>
            <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
              <li>
                <div class="date">
                  <p class="day"><?php the_time('d'); ?></p>
                  <p class="month"><?php the_time('M'); ?></p>
                </div>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </li>
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>

      </div>

      <div class="highlights confs" id="confs">

        <?php query_posts('cat=5&showposts=3&order=ASC'); ?>

          <h5><?php single_cat_title() ?></h5>

          <ul>
            <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

            <?php $data = get_post_custom_values('data');

                if ($data[0] != '') {
                  // $date = date("d/m/y", strtotime($data[0]));
                  $date = $data[0];
                  echo '<span style="display: none;">' . $date . '</span>';
                }
            ?>
              <li>
                <div class="date">
                  <p class="day"><?php the_time('d'); ?></p>
                  <p class="month"><?php the_time('M'); ?></p>
                </div>
                <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
                <?php the_content(); ?>
              </li>
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>

      </div>

      <div class="highlights cast" id="cast">

        <?php query_posts('cat=7&showposts=1'); ?>

          <h5><?php single_cat_title() ?></h5>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
            <div class="date">
              <p class="day"><?php the_time('d'); ?></p>
              <p class="month"><?php the_time('M'); ?></p>
            </div>
            <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
            <?php the_content(); ?>
          <?php endwhile; endif; wp_reset_query(); ?>

      </div>

      <div class="highlights weekly" id="weekly">

        <?php query_posts('cat=6&showposts=3&order=DESC'); ?>

          <h5><?php single_cat_title() ?></h5>

          <ul>
            <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
              <li>
                <div class="date">
                  <p class="day"><?php the_time('d'); ?></p>
                  <p class="month"><?php the_time('M'); ?></p>
                </div>
                <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
              </li>
            <?php endwhile; endif; wp_reset_query(); ?>
          </ul>

      </div>

      <!-- <div class="highlights labs" id="labs">

        <?php query_posts('cat=5&showposts=1'); ?>

          <h5><?php single_cat_title() ?></h5>

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

      </div> -->

      <hr />

      <article class="join-us" id="get-involved">

        <!-- <img src="<?php bloginfo('template_url'); ?>/img/img-getinvolved.png" alt="Brazilian Heart" width="167" height="145"> -->
        <span class="sprite-home sprite-getinvolved"></span>
        <h3>Junte-se a nós</h3>
        <p>Estamos iniciando um movimento de unificação das comunidades brasileiras de desenvolvimento em torno do JavaScript, seja front-end ou back-end. Fique ligado nas novidades que estamos preparando para vocês. <a href="https://groups.google.com/forum/?fromgroups#!forum/braziljs-foundation">Entre no grupo de discussão</a>.</p>
        

        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <form action="http://braziljs.us5.list-manage1.com/subscribe/post?u=77b6594f10bba05dcc722c80e&amp;id=e6beed4270" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <label for="">Inscreva-se na BrazilJS Weekly, nossa seleção semanal de conteúdo:</label>
            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="seu@email.com" required>
            <input type="submit" value="Inscreva-se" name="subscribe" id="mc-embedded-subscribe" class="button">
          </form>
        </div>

      </article>

    </div>

  </section>

  <?php get_footer(); ?>
