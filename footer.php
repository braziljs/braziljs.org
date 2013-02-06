<footer>

    <div class="wrapper">

      <span class="sprite-home sprite-logo-pb"></span>

      <p class="about">BrazilJS é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade em torno do JavaScript no Brasil.</p>

      <ul class="nav">
        <li><a href="<?php bloginfo('home'); ?>/team" title="Time">Time</a></li>
        <li><a href="http://braziljs.com.br/" title="Conferência">Conferência</a></li>
        <li><a href="<?php bloginfo('home'); ?>/contact" title="Contact">Contato</a></li>
      </ul>

      <ul class="social">
        <li><a href="https://twitter.com/braziljs" title="Twitter">Twitter</a></li>
        <li><a href="http://www.facebook.com/braziljs" title="Facebook">Facebook</a></li>
        <li><a href="https://groups.google.com/forum/?fromgroups#!forum/braziljs-foundation">Google Groups</a></li>
      </ul>

      <p class="license">© <?php echo date(Y); ?>. Conteúdo disponível sob a licença <a href="http://creativecommons.org/licenses/by/3.0/br/">Creative Commons</a>.</p>

    </div>

  </footer>

  <script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33656081-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=372862979453673";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  </script>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</body>
</html>