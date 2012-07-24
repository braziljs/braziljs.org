Newsletter = function(){

    var self = this;
    self.box = $("#get-involved");
    self.form = $("#get-involved-form");

    self.binds = function(){

        $("#get-involved").delegate(".more-one", "click", function(e){

            $("#success").fadeOut("fast", function() {
                self.form.fadeIn('fast');
            });

            e.preventDefault();
        });

        self.form.on("submit", function(e){

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

            e.preventDefault();
        });

    };

    self.init = function(){

        self.binds();

    };
};