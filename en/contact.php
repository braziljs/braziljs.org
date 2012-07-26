<?php include 'header.php' ?>

  <article class="contact single-page">

    <h3>Contact us</h3>
    <p></p>

    <form id="contact-form">

      <!-- <div class="alert success">
        <strong>Thanks</strong> for your message!
      </div>

      <div class="alert error">
        <strong>Sorry!</strong> Please insert a valid email.
      </div> -->

      <span class="alert-box">
      </span>

      <fieldset>
        <label for="name">Name:</label>
        <input type="text" name="name">
      </fieldset>
      <fieldset>
        <label for="email">Email:</label>
        <input type="text" name="email">
      </fieldset>
      <fieldset>
        <label for="company">Subject:</label>
        <input type="text" name="subject">
      </fieldset>
      <fieldset>
        <label for="message">Message:</label>
        <textarea name="message"></textarea>
      </fieldset>
      <fieldset>
        <input type="submit" value="Submit">
      </fieldset>
    </form>

  </article>

<?php include 'footer.php' ?>

  <script src="js/jquery.js"></script>
  <script src='js/contact.js'></script>
  <script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js"></script>

  <script>
  $(document).ready(function() {
      var c = new Contact();
      c.init();
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