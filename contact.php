<?php include 'header.php' ?>

  <article class="contact single-page">

    <h3>Contato</h3>
    <p></p>

    <form id="contact-form">

      <!-- <div class="alert success">
        <strong>Obrigado</strong> pela sua mensagem!
      </div>

      <div class="alert error">
        <strong>Desculpe!</strong> Por favor insira um email válido.
      </div> -->

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
        <input type="text" name="assunto">
      </fieldset>
      <fieldset>
        <label for="message">Mensagem:</label>
        <textarea name="mensagem"></textarea>
      </fieldset>
      <fieldset>
        <input type="submit" value="Enviar">
      </fieldset>
    </form>

  </article>

<?php include 'footer.php';?>

  <script src="js/jquery.js"></script>
  <script src='js/contact.js'></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js"></script>

  <script>
  $(document).ready(function() {
      var c = new Contact();
      c.init();
  });
  </script>

  <?php include 'ga.php';?>

</body>
</html>