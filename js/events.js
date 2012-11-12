$(document).ready(function(){

  $.getJSON("http://braziljs.org/services/events/2012.json", function (response) {

    var nextEvents = [],
        pastEvents = "",
        currentDate = new Date(),
        currentDay = currentDate.getDate(),
        currentMonth = currentDate.getMonth() + 1,
        currentYear = currentDate.getFullYear(),
        fullCurrentDate = currentYear + "/" + currentMonth + "/" + currentDay;

    for ( var i = 0; i < response.events.length ; i++ ) {

      fullEventDate = (response.events[i].date).replace(/-/g,'/');

      eventDay = fullEventDate.substring(8, 10);
      eventMonth = fullEventDate.substring(5, 7);

      minEventDate = eventDay + "/" + eventMonth;

      EVENT = '<div class="event">' +
           '<div class="event-media">' +
              '<a href="'+ response.events[i].website +'" title="'+ response.events[i].name +'">' +
                '<img src="'+ response.events[i].thumbnail +'" alt="'+ response.events[i].name +'" />' +
                '<span class="event-date">'+ minEventDate +'</span>' +
                '<span class="event-price">'+ response.events[i].price +'</span>' +
              '</a>' +
            '</div>' +
            '<h1 class="event-name"><a href="'+ response.events[i].website +'" title="'+ response.events[i].name +'">'+ response.events[i].name +'</a></h1>' +
            '<span class="event-city">'+ response.events[i].location +'</span>' +
          '</div>';

      if ( fullEventDate >= fullCurrentDate ) {
        nextEvents.push(EVENT);
      }
      else {
        pastEvents += EVENT;
      }

    }

    nextEvents = nextEvents.reverse();

    for ( var j = 0; j < nextEvents.length; j++ ) {
      $("#event-new").append(nextEvents[j]);
    }

    $("#events-older").html(pastEvents);

  });

})