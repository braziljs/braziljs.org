$(document).ready(function(){

  $.getJSON('http://braziljs.org/services/events/2012.json', function(response) {
    MontaEvents(response);
  });

  var data = new Date(),
      dia = data.getDate(),
      mes = data.getMonth(),
      ano = data.getFullYear(),
      dateAtual = ano + "-" + mes + "-" + dia;

  function MontaEvents (data) {
    var template = Events.getTemplate($("#list-events")); 
    var html = template(data);
    $('#events').html(html);
  } 

})

var Events = {

  getTemplate: function(template){
    var source   = template.html();
    return Handlebars.compile(source);
  },

}