$(function() {

  $.getJSON("http://braziljs.org/services/events/2012.json", function (result) {

    EVENT = '<div class="event">' +
              '<div class="event-media">' +
                '<a href="#{website}" title="#{name}">' +
                  '<img src="#{thumbnail}" alt="#{name}" />' +
                  '<span class="event-date">#{date}</span>' +
                  '<span class="event-price">#{price}</span>' +
                '</a>' +
              '</div>' +
              '<h1 class="event-name"><a href="#{website}" title="#{name}">#{name}</a></h1>' +
              '<span class="event-city">#{location}</span>' +
            '</div>';

    if (result.events && result.events.length > 0) {

      var events = "", item = "";

      for ( var i = 0; i < result.events.length ; i++ ) {

        events += EVENT.replace("#{website}", result.events[i].website)
                       .replace("#{name}", result.events[i].name)
                       .replace("#{thumbnail}", result.events[i].thumbnail)
                       .replace("#{name}", result.events[i].name)
                       .replace("#{date}", result.events[i].date)
                       .replace("#{price}", result.events[i].price)
                       .replace("#{website}", result.events[i].website)
                       .replace("#{name}", result.events[i].name)
                       .replace("#{name}", result.events[i].name)
                       .replace("#{location}", result.events[i].location);
      }

      $('.content .wrapper').append(events);

    }

  });

});