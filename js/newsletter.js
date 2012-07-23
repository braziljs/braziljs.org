Newsletter = function(){

    var self = this;
    self.form = $("#get-involved-form");

    self.binds = function(){

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