$(document).ready(function(){

  function sortEventsAsc(a, b){
      return new Date(a.date).getTime() - new Date(b.date).getTime();
  };

  // Events
  $.ajax({
    url: './services/events/2014.json',
    dataType: 'json',
    success: function(response) {
      var events = response.events;
      var eventsHTML = '';

      events = events.filter(function (el) {
        var today = new Date();
        var eventDate = new Date(el.date);

        return moment(eventDate).isAfter(today);
      });

      events.sort(sortEventsAsc);

      for ( var i = 0; i < 3; i++ ) {
        var day = moment(events[i].date).format('D');
        var month = moment(events[i].date).format('MMM');
        var title = events[i].name;
        var url = events[i].website;
        var location = events[i].location;

        eventsHTML += '<li>' +
                        '<div class="date">' +
                          '<p class="day">' + day + '</p>' +
                          '<p class="month">' + month + '</p>' +
                        '</div>' +
                        '<a href="' + url + '" title="' + title + '">' + title + '</a>' +
                        '<p>' + location + '</p>' +
                      '</li>';
      }

      $("#conf-list").html(eventsHTML);
    }
  });

  // Podcast
  //
  // Data fetched from: http://zofe.com.br/feed/posts.xml
  // Converted from XML to JSON: http://pipes.yahoo.com/braziljs/zofe
  $.ajax({
    url: 'http://pipes.yahoo.com/pipes/pipe.run?_id=6b599fe5b44c8cb4d403d2fa7717b08a&_render=json&_callback=?',
    dataType: 'jsonp',
    success: function(response) {
      var podcasts = response.value.items[0].entry;
      var podcastsHTML = '';

      for ( var i = 0; i < 3; i++ ) {
        var day = moment(podcasts[i].updated).format('D');
        var month = moment(podcasts[i].updated).format('MMM');
        var title = podcasts[i].title;
        var url = podcasts[i].id;

        podcastsHTML += '<li>' +
                        '<div class="date">' +
                          '<p class="day">' + day + '</p>' +
                          '<p class="month">' + month + '</p>' +
                        '</div>' +
                        '<a href="' + url + '" title="' + title + '">' + title + '</a>' +
                      '</li>';
      }

      $("#cast-list").html(podcastsHTML);
    }
  });

  // Weekly
  //
  // Data fetched from: http://us5.campaign-archive1.com/feed?u=77b6594f10bba05dcc722c80e&id=e6beed4270
  // Converted from XML to JSON: http://pipes.yahoo.com/braziljs/weekly
  $.ajax({
    url: 'http://pipes.yahoo.com/pipes/pipe.run?_id=998042f077e1a48948d8a957b6b3bb80&_render=json&_callback=?',
    dataType: 'jsonp',
    success: function(response) {
      var weeklys = response.value.items[0].channel.item;
      var weeklysHTML = '';

      for ( var i = 0; i < 3; i++ ) {
        var day = moment(weeklys[i].pubDate).format('D');
        var month = moment(weeklys[i].pubDate).format('MMM');
        var title = weeklys[i].title;
        var url = weeklys[i].link;

        weeklysHTML += '<li>' +
                        '<div class="date">' +
                          '<p class="day">' + day + '</p>' +
                          '<p class="month">' + month + '</p>' +
                        '</div>' +
                        '<a href="' + url + '" title="' + title + '">' + title + '</a>' +
                      '</li>';
      }

      $("#weekly-list").html(weeklysHTML);
    }
  });

})