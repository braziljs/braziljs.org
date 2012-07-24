  <footer>

    <div class="wrapper">

      <img src="img/logo-pb.png" alt="BrazilJS Logo">

      <p class="about">BrazilJS Foundation is a non-profit foundation with the mission to unite and move the JavaScript community in Brazil.</p>

      <ul class="nav">
        <li><a href="team.html" title="Team">Team</a></li>
        <li><a href="manifesto.html" title="Manifesto">Manifesto</a></li>
        <li><a href="contact.html" title="Contact">Contact</a></li>
      </ul>

      <ul class="social">
        <li><a href="https://twitter.com/braziljs" title="Twitter">Twitter</a></li>
        <li><a href="http://www.facebook.com/braziljs" title="Facebook">Facebook</a></li>
      </ul>

      <p class="license">© 2012. Content available under a <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons">Creative Commons</a> license.</p>

    </div>

  </footer>

  <script src="js/jquery.js"></script>
  <script src='js/newsletter.js'></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js"></script>

  <script>
  $(document).ready(function() {
      var n = new Newsletter();
      n.init();

      $('#get-involved-form').validate({
          rules:{
            email:{
              required: true,
              email: true
            }
          },
          submitHandler: function() {
            //pegamos os valores de todos os campos
            var valores = $("#get-involved-form").serialize();
            //e enviamos para a página demoajaxresult.php
            $.post("app/newsletter.php", valores,
            function(data) {
                //depois do envio, e receber o resultado
            });
          }
      })
  });
  </script>

</body>
</html>