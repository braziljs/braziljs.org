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