<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' );?> - <?php bloginfo( 'description' );?></title>
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" >
  <link rel="icon" type="image/gif" href="<?php bloginfo('template_url'); ?>/favicon.gif" >
</head>
<body>

  <header>

    <nav class="top-bar">

      <div class="wrapper">
        <a href="/" title="Home" rel="home"><img src="<?php bloginfo('template_url'); ?>/img/logo-mini.png" alt="BrazilJS Logo" /></a>
        <p>moving &amp; uniting</p>

        <ul>
          <li>/ <a href="/Community">Community</a></li>
          <li>/ <a href="/conference">Conferences</a></li>
          <li>/ <a href="/labs">Labs</a></li>
          <li>/ <a href="cast">Cast</a></li>
          <li>/ <a href="/team">Team</a></li>
        </ul>

        <iframe class="facebook-share-button" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fbraziljs.org%2F&amp;send=false&amp;layout=button_count&amp;width=90&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=199580610147156" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:90px; height:21px;" allowTransparency="true"></iframe>

        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://braziljs.org/">Tweet</a>
      </div>

    </nav>

    <section class="banner">

      <div class="wrapper">
        <img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="BrazilJS Logo">
        <h1>moving &amp; uniting</h1>
        <p>We not only bring content to people, we want to unite them. <a href="#">Read our manifesto</a></p>
      </div>

    </section>

  </header>