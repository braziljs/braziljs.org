$(document).ready(function(){

  function sortEventsAsc(a, b){  
      return new Date(a.date).getTime() - new Date(b.date).getTime();
  };

  $.getJSON("../services/events/2014.json", function (response) {

    var nextEvents = [],
        pastEvents = "",
        currentDate = new Date(),
        currentDay = currentDate.getDate(),
        currentMonth = currentDate.getMonth() + 1,
        currentYear = currentDate.getFullYear();

    if (currentMonth.toString().length == 1) {
      currentMonth = '0' + currentMonth;
    }

    if (currentDay.toString().length == 1) {
      currentDay = '0' + currentDay;
    }

    var fullCurrentDate = currentYear + "/" + currentMonth + "/" + currentDay;

    for ( var i = 0; i < response.events.length ; i++ ) {

      response.events.sort(sortEventsAsc);

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

      if ( fullEventDate <= fullCurrentDate ) {
        pastEvents += EVENT;
      }
      else {
        nextEvents.push(EVENT);
      }

    }

    for ( var j = 0; j < nextEvents.length; j++ ) {
      $("#event-new").append(nextEvents[j]);
    }

    $("#events-older").html(pastEvents);

    // If we don't have new or passed events, remove its title
    var newEvents = $("#event-new").html(),
        oldEvents = $("#events-older").html();

    if ( newEvents === "" ) {
      $("#title-new-events").hide();
    }

    if ( oldEvents === "" ) {
      $("#title-old-events").hide();
    }

  });

})