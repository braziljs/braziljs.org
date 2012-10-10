<?php include 'header.php' ?>
<style type="text/css">
  .content-blog p {
    margin-bottom: 15px;
  }
</style>

  <section class="content">

    <div class="wrapper" style="width: 700px;">

      <?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>

      <article class="content-blog">

        <h2 style="text-align: left;"><?php the_title(); ?></h2>
        
          <?php the_content(); ?>

        <br>

        <div id="disqus_thread"></div>
        <script type="text/javascript">
          var disqus_shortname = 'zenorocha',
              disqus_url = "<?php the_permalink(); ?>";

          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
        </script>

      </article>

      <?php endwhile; endif; wp_reset_query(); ?>

    </div>

  </section>

<?php include 'footer.php' ?>