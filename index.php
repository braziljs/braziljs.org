<?php include 'header.php' ?>

  <article class="join-us" id="get-involved">

    <img src="img/img-getinvolved.png" alt="Brazilian Heart">
    <h3>Join us</h3>
    <p>We are starting a movement to unify the JavaScript community in Brazil, both front-end and back-end. Stay tuned for the cool things we are preparing. <a href="https://groups.google.com/forum/?fromgroups#!forum/braziljs-foundation">Join the discussion group</a>.</p>

    <form id="get-involved-form">
      <input id="get-involved-form-email" name="email" type="text" placeholder="Enter your email here">
      <input id="get-involved-form-button" type="submit" value="Sign me">
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
  </script>

</body>
</html>