Newsletter = function(){

  var self = this;
  self.box = $("#get-involved");
  self.form = $("#get-involved-form");

  self.binds = function(){

    self.box.on("click", ".more-one", function(){

      $("#success").fadeOut("fast", function() {
          self.form.fadeIn('fast');
          $("#get-involved-form-email").val("");
      });

      return false;
    });

  };

  self.init = function(){

    self.binds();

    $('#get-involved-form').validate({
      rules:{
        email:{
          required: true,
          email: true
        }
      },
      submitHandler: function() {

        var email = $("#get-involved-form-email").val();

        $.ajax( {
                type: "POST",
                url: "app/newsletter.php",
                data: { email: email }
                } ).done(function( msg ) {

                    self.form.fadeOut('fast', function() {
                        $("#success").html(msg).fadeIn();
                    });
            });

        return false;
      }
    });
  };
};