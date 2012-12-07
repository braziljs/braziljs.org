<?php /* Template Name: Events */

  get_header(); ?>

  <section class="content">
    <div class="wrapper" id="events">
      <p style="text-align: center; font-size: 16px;">Seja bem-vindo a página com todos os eventos de front-end que aconteceram ou ainda irão acontecer em <?php echo date(Y); ?>.</p>
      <p style="text-align: center; font-size: 16px; margin-bottom: 30px;">Sentiu falta de algum evento por aqui? Basta <a href="https://github.com/braziljs/services/blob/master/events/<?php echo date(Y); ?>.json">alterar o JSON</a> e fazer um <a href="https://github.com/braziljs/services/">pull request</a> :)</p>
      <h3 id="title-new-events">Próximos eventos</h3>
      <div id="event-new"></div>

      <h3>Eventos Anteriores</h3>
      <div id="events-older"></div>
    </div>
  </section>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/events.js"></script>

  <?php get_footer(); ?>