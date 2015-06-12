<?php
    include('jsmin.php');

    function writeJS(){
        echo 'href="javascript: '.preg_replace('/"/', '&quot;', JSMin::minify(file_get_contents('bookmarklet.js'))).'"';
    }

?><!DOCTYPE HTML>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Add2Weekly | BrazilJS Foundation - Unidos crescemos</title>

   <!-- general meta tags -->
  <meta charset="UTF-8">
  <meta name="robots" content="all, index, follow" />
  <meta name="description" content="BrazilJS Foundation é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade de JavaScript no Brasil." />

  <!-- favicon -->
  <link rel="shortcut icon" href="http://braziljs.org/wp-content/themes/foundation/favicon.ico">

  <!-- google fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

  <!-- styles -->
  <link rel="stylesheet" href="http://braziljs.org/wp-content/themes/foundation/style.css">

  <!-- open graph -->
  <meta property="og:title" content="BrazilJS Foundation" />
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="BrazilJS Foundation é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade de JavaScript no Brasil." />
  <meta property="og:url" content="http://braziljs.org/"/>
  <meta property="og:image" content="http://braziljs.org/img/fb-share.jpg" />
  <meta property="og:site_name" content="BrazilJS"/>
  <meta property="og:locale" content="pt_BR" />
  <meta property="fb:app_id" content="372862979453673" />


</head>
<body>

  <header>

    <nav class="top-bar">

      <div class="wrapper">
        <a href="http://braziljs.org" title="Home" rel="home"><img src="http://braziljs.org/wp-content/themes/foundation/img/logo-mini.png" alt="BrazilJS Logo" /></a>

        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://braziljs.org/">Tweet</a>

        <div class="fb-like" data-href="https://www.facebook.com/braziljs" data-send="false" data-layout="button_count" data-width="150" data-show-faces="false" style="border:none; float:right; overflow:hidden; width:80px !important; height:12px !important;"></div>
      </div>

    </nav>

    <section class="banner">

      <div class="wrapper">
        <img class="logo" src="http://braziljs.org/wp-content/themes/foundation/img/logo.png" alt="BrazilJS Logo">
        <h1>unidos crescemos</h1>
        <p>Não levamos apenas conteúdo para as pessoas, nós queremos uni-las.</p>
      </div>

    </section>

  </header>

  <section class="content">
    <div class="wrapper" id="events">





        <p>Você sabia que é possível nos enviar sugestões de conteúdo que gostaria de ver na BrazilJS Weekly?
        <p>Agora, disponibilizamos uma ferramenta a mais para lhe auxiliar com isso! Trata-se de um <a href="http://pt.wikipedia.org/wiki/Bookmarklet" target="_blank">bookmarklet</a>.
        <p style="margin-top: 20px;">Arraste a imagem abaixo para a sua barra de favoritos, ou use o menu do botão direito e a opção "adicionar aos favoritos":<br/>
        <div style="text-align: center;margin-top: 20px;"><a title="BrazilJS - Add2Weekly" alt="BrazilJS - Add2Weekly" <?php writeJS(); ?>><img src="http://braziljs.org/services/add2weekly/logo-braziljs.png" title="BrazilJS - Add2Weekly" style="height: 60px;" alt="BrazilJS - Add2Weekly" /></a></div>
        <p style="margin-top: 20px;">Uma vez em seus favoritos, quanto você encontrar uma página, notícia ou demo que gostaria de ver na weekly do BrazilJS, basta clicar no link em seus favoritos!







    </div>
  </section>

  <script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
  <script src="http://braziljs.org/wp-content/themes/foundation/js/events.js"></script>

  <footer>

    <div class="wrapper">

      <img src="http://braziljs.org/wp-content/themes/foundation/img/logo-pb.png" alt="BrazilJS Logo" width="150" height="51">

      <p class="about">BrazilJS é uma fundação sem fins lucrativos com a missão de mover e unir a comunidade em torno do JavaScript no Brasil.</p>

      <ul class="nav">
        <li><a href="http://braziljs.org/team" title="Time">Time</a></li>
        <li><a href="http://braziljs.com.br/" title="Conferência">Conferência</a></li>
        <li><a href="http://braziljs.org/contact" title="Contact">Contato</a></li>
      </ul>

      <ul class="social">
        <li><a href="https://twitter.com/braziljs" title="Twitter">Twitter</a></li>
        <li><a href="http://www.facebook.com/braziljs" title="Facebook">Facebook</a></li>
        <li><a href="https://groups.google.com/forum/?fromgroups#!forum/braziljs-foundation">Google Groups</a></li>
      </ul>

      <p class="license">© 2012. Conteúdo disponível sob a licença <a href="http://creativecommons.org/licenses/by/3.0/br/">Creative Commons</a>.</p>

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
  </script>
  </body>
</html>
