

$(document).ready(function(){


  function isDate_(input) {
    var status = false;
    if (!input || input.length <= 0) {
      status = false;
    } else {
      var result = new Date(input);
      if (result == 'Invalid Date') {
        status = false;
      } else {
        status = true;
      }
    }
    return status;
  }

  // Events
  $.ajax({
    url: './services/events/2014.json',
    dataType: 'json',
    success: function(response) {


      var nextEvents = [],
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



        fullEventDate = (response.events[i].date).replace(/-/g,'/');


        if (isDate_(response.events[i].date)) {
          eventDay = moment(response.events[i].date).format('D');
          eventMonth = moment(response.events[i].date).format('MMM');
        }
        else {
          eventDay = fullEventDate.substring(8, 10);
          eventMonth = fullEventDate.substring(5, 7);
        }

        EVENT = '<li>' +
                  '<div class="date">' +
                    '<p class="day">' + eventDay + '</p>' +
                    '<p class="month">' + eventMonth + '</p>'+
                  '</div>' +
                  '<a href="' + response.events[i].website  + '" title="' + response.events[i].name + '">' + response.events[i].name + '</a>' +
                  '<p>' + response.events[i].location + '</p>' +
                '</li>';

      if ( fullEventDate >= fullCurrentDate ) {
        nextEvents.push(EVENT);
      }
    }

    $("#conf-list").empty();
    for ( var j = 0; j < 3; j++ ) {
        $("#conf-list").append(nextEvents[j]);
      }
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