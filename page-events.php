<?php /* Template Name: Events */

  get_header(); ?>

  <section class="content">
    <div class="wrapper" id="events">
      <h3>Próximos eventos</h3>
      <div id="event-new"></div>

      <h3>Eventos Anteriores</h3>
      <div id="events-older"></div>
    </div>
  </section>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/events.js"></script>

  <?php get_footer(); ?>