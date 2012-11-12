$(document).ready(function(){

  $.getJSON("http://braziljs.org/services/events/2012.json", function (response) {
  //$.getJSON('/themeBrazilJS/wp-content/themes/foundation/js/2012.json', function(response) {

  var data = new Date(),
      dia = data.getDate(),
      mes = data.getMonth() + 1,
      ano = data.getFullYear(),
      dateAtual = ano + "/" + mes + "/" + dia;

    for ( var i = 0; i < response.events.length ; i++ ) {

      date = (response.events[i].date).replace(/-/g,'/');

      EVENT = '<div class="event">' +
           '<div class="event-media">' +  
              '<a href="'+ response.events[i].website +'" title="'+ response.events[i].name +'">' + 
                '<img src="'+ response.events[i].thumbnail +'" alt="'+ response.events[i].name +'" />' +
                '<span class="event-date">'+ date +'</span>' +
                '<span class="event-price">'+ response.events[i].price +'</span>' +
              '</a>' +
            '</div>' +
            '<h1 class="event-name"><a href="'+ response.events[i].website +'" title="'+ response.events[i].name +'">'+ response.events[i].name +'</a></h1>' +
            '<span class="event-city">'+ response.events[i].location +'</span>' +
          '</div>';

      if ( date >= dateAtual ) {
        $("#event-new").append(EVENT);
      }
      else {
        $("#events-older").append(EVENT);
      }
      
    }

  });

})