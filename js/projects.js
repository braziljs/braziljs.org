(function ($, undefined) {

  var MEMBER = '<li class="member">' +
               '  <a class="url" href="#{url}" title="@#{login}">' +
               '    <img class="photo" src="#{avatar}" width="50" height="50" alt="@#{login}">' +
               '  </a>' +
               '</li>';

  $.getJSON("https://api.github.com/repos/braziljs/foundation/contributors?callback=?", function (result) {

      if (result.data && result.data.length > 0) {

        var members = "", item = "";

        for ( var i = 0; i < result.data.length ; i++ ) {

          members += MEMBER.replace("#{avatar}", result.data[i].avatar_url)
                   .replace("#{login}", result.data[i].login)
                   .replace("#{url}", result.data[i].url
                                    .replace("api.", "")
                                    .replace("users/", ""));

        }

        $(".members").empty().append(members);
        $(".member").fadeIn(1000);
      }

  });

})(jQuery);