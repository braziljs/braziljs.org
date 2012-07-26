<?php include 'header.php' ?>

  <article class="join-us" id="get-involved">

    <img src="img/img-getinvolved.png" alt="Brazilian Heart">
    <h3>Junte-se a nós</h3>
    <p>Estamos iniciando um movimento de unificação das comunidades brasileiras de desenvolvimento em torno do JavaScript, seja front-end ou back-end. Fique ligado nas novidades que estamos preparando para vocês. <a href="https://groups.google.com/forum/?fromgroups#!forum/braziljs-foundation">Entre no grupo de discussão</a>.</p>

    <form id="get-involved-form">
      <input id="get-involved-form-email" name="email" type="text" placeholder="Entre seu email aqui">
      <input id="get-involved-form-button" type="submit" value="Cadastrar">
    </form>

    <div id="success" class="alert success"></div>
    <div id="error" class="alert error"></div>

  </article>

<?php include 'footer.php' ?>

  <script src="js/jquery.js"></script>
  <script src='js/newsletter.js'></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js"></script>

  <script>
  $(document).ready(function() {
      var n = new Newsletter();
      n.init();
  });


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33656081-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  </script>

</body>
</html>