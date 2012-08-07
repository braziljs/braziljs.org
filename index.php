<?php get_header(); ?>

  <section class="content">

    <div class="wrapper">

      <h2>Let us present our projects! <span>You'll see so much from now.</span></h2>

      <ul class="projects">

        <li class="project-1">
          <figure>
            <img src="<?php bloginfo('template_url'); ?>/img/icon-community.png" alt="Icon - Community">
          </figure>
          <h4>Community</h4>
          <p>Sum dolor sit amet, consectetur adipiscing elit. Nunc condimentum interdum molestie.</p>
          <div class="arrow"></div>
        </li>

        <li class="project-2">
          <figure>
            <img src="<?php bloginfo('template_url'); ?>/img/icon-conf.png" alt="Icon - Conference">
          </figure>
          <h4>Conferences</h4>
          <p>Sum dolor sit amet, consectetur adipiscing elit. Nunc condimentum interdum molestie.</p>
          <div class="arrow"></div>
        </li>

        <li class="project-3">
          <figure>
            <img src="<?php bloginfo('template_url'); ?>/img/icon-cast.png" alt="Icon - Cast">
          </figure>
          <h4>Cast</h4>
          <p>Sum dolor sit amet, consectetur adipiscing elit. Nunc condimentum interdum molestie.</p>
          <div class="arrow"></div>
        </li>

        <li class="project-4">
          <figure>
            <img src="<?php bloginfo('template_url'); ?>/img/icon-labs.png" alt="Icon - Labs">
          </figure>
          <h4>Labs</h4>
          <p>Sum dolor sit amet, consectetur adipiscing elit. Nunc condimentum interdum molestie.</p>
          <div class="arrow"></div>
        </li>

      </ul>

      <div class="highlights news">

        <?php query_posts('cat=1&showposts=3'); ?>
          
          <h5><?php single_cat_title() ?></h5>

          <ul>
          
            <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
              <li>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
              </li>
            <?php endwhile; endif; wp_reset_query(); ?>
          
          </ul>

      </div>

      <div class="highlights confs">

        <?php query_posts('cat=3&showposts=3&order=ASC'); ?>

          <h5><?php single_cat_title() ?></h5>

          <ul>

            <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
              <li>
                <div class="date">
                  <p class="day"><?php the_time('j'); ?></p>
                  <p class="month"><?php the_time('M'); ?></p>
                </div>
                <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
                <?php the_content(); ?>
              </li>
            <?php endwhile; endif; wp_reset_query(); ?>

          </ul>

      </div>

      <div class="highlights cast">

        <?php query_posts('cat=4&showposts=1'); ?>
          
          <h5><?php single_cat_title() ?></h5>

          <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
            <div class="date">
              <p class="day"><?php the_time('j'); ?></p>
              <p class="month"><?php the_time('M'); ?></p>
            </div>
            <a href="<?php echo excerpt(100); ?>" target="_blank"><?php the_title(); ?></a>
            <?php the_content(); ?>
          <?php endwhile; endif; wp_reset_query(); ?>

      </div>

      <div class="highlights labs">

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

      </div>

      <hr />

      <article class="get-involved">

        <img src="<?php bloginfo('template_url'); ?>/img/img-getinvolved.png" alt="Brazilian Heart">
        <h3>Get involved</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae orci eget dui semper consectetur. Nulla facilisi. Integer volutpat turpis at eros vestibulum non tristique elit lacinia. Fusce non dolor a ipsum iaculis scelerisque. <a href="#">Donec varius gravida odio</a>.</p>

      </article>

      <!-- <hr />

      <section class="sponsors">

        <h5>Sponsorship and Donations</h5>
        <a href="#" class="help-link">Help us to realize our dreams</a>

        <ul>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/sponsor-1.png" alt="Sponsor 1"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/sponsor-2.png" alt="Sponsor 2"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/sponsor-3.png" alt="Sponsor 3"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/sponsor-4.png" alt="Sponsor 4"></a></li>
          <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/sponsor-5.png" alt="Sponsor 5"></a></li>
        </ul>

      </section> -->

    </div>

  </section>

  <?php get_footer(); ?>
