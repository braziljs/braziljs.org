Contact = function(){

  var self = this;

  self.init = function(){

   $('#contact-form').validate({

      rules:{
        name:{
          required: true
        },
        email:{
          required: true,
          email: true
        },
        subject:{
          required: true
        },
        message:{
          required: true
        }
      },
      submitHandler: function() {
        var data = $('#contact-form').serialize();

        $.ajax({
          type: "POST",
          url: "/app/contact.php",
          data: data,
        }).done(function( msg ) {
          $("#contact-form").find(".alert-box").html(msg).fadeIn();
        });

        return false;
      }

    });

  };
};