Contact = function(){

    var self = this;
    self.form = $("#contact-form");

    self.binds = function(){

        self.form.on("submit", function(e){

            var data = $(this).serialize();

            $.ajax({
                      type: "POST",
                      url: "app/contact.php",
                      data: data,
                    }).done(function( msg ) {

                        $("#contact-form").find(".alert-box").html(msg).fadeIn();
                });

            e.preventDefault();
        });

    };

    self.init = function(){

        self.binds();

    };
};