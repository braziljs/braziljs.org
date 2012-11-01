<?php get_header(); ?>

  <article class="wrapper contact single-page">

    <h3>Contato</h3>
    <p></p>

    <form id="contact-form">

      <div class="alert success">
        <strong>Obrigado</strong> pela sua mensagem!
      </div>

      <div class="alert error">
        <strong>Desculpe!</strong> Por favor insira um email válido.
      </div>

      <span class="alert-box">
      </span>

      <fieldset>
        <label for="name">Nome:</label>
        <input type="text" name="name">
      </fieldset>
      <fieldset>
        <label for="email">Email:</label>
        <input type="text" name="email">
      </fieldset>
      <fieldset>
        <label for="company">Assunto:</label>
        <input type="text" name="subject">
      </fieldset>
      <fieldset>
        <label for="message">Mensagem:</label>
        <textarea name="message"></textarea>
      </fieldset>
      <fieldset>
        <input type="submit" value="Enviar">
      </fieldset>
    </form>

  </article>

  <script src='<?php bloginfo('template_url'); ?>/js/jquery.js'></script>
  <script src='<?php bloginfo('template_url'); ?>/js/contact.js'></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js"></script>

  <script>
    $(document).ready(function() {
        var c = new Contact();
        c.init();
    });
  </script>

  <?php get_footer(); ?>