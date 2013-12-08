/*
 *  Project: BrazilJS Projects - Github Contributors
 *  Description: List all contributors of some Github Repository
 *  Author: Zeno Rocha
 *  License: WTFPL
 */

;(function ( $, window, undefined ) {

  var pluginName = 'githubContributors',
      document = window.document,
      defaults = {
          propertyName: "value"
      };

  function Plugin( element, options ) {
      this.element = element;
      this.$element = $(element);
      this.repo = $(element).data("repo");
      this.options = $.extend( {}, defaults, options) ;
      this._defaults = defaults;
      this._name = pluginName;

      this.init();
  }

  Plugin.prototype.init = function () {

    var self = this,
        MEMBER = '<a class="project-contributor" href="#{url}" title="@#{login}">' +
                 '  <img src="#{avatar}" width="50" height="50" alt="@#{login}">' +
                 // '  <span class="project-contributor-qt">#{contributions}</span>' +
                 '</a>';

    $.getJSON("https://api.github.com/repos/" + self.repo + "/contributors?callback=?", function (result) {

        if (result.data && result.data.length > 0) {

          var members = "", item = "";

          for ( var i = 0; i < result.data.length ; i++ ) {

            members += MEMBER.replace("#{avatar}", result.data[i].avatar_url)
                             .replace("#{login}", result.data[i].login)
                             .replace("#{url}", result.data[i].url)
                             .replace("#{contributions}", result.data[i].contributions)
                             .replace("api.", "")
                             .replace("users/", "");
          }

          self.$element.append(members);

        }

    });

  };

  $.fn[pluginName] = function ( options ) {
      return this.each(function () {
          if (!$.data(this, 'plugin_' + pluginName)) {
              $.data(this, 'plugin_' + pluginName, new Plugin( this, options ));
          }
      });
  };

}(jQuery, window));