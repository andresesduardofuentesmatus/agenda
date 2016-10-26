$(document).ready(function(){

  var fechaHoy = $('#fechaActual').val();
  var fechaHoy2 = $('#fechaActual2').val();

  $('#calendar').fullCalendar({
  			header: {
  				left: 'prev,next today',
  				center: 'title',
  				right: 'listDay,listWeek'
  			},
  			views: {
  				listDay: { buttonText: 'Dia' },
  				listWeek: { buttonText: 'Mes' }
  			},
        locale: 'es',
  			defaultView: 'listDay',
  			navLinks: true, // can click day/week names to navigate views
  			editable: true,
  			eventLimit: true, // allow "more" link when too many events
  			events: [
  				{
            id: 1,
            title: 'Evento de prueba id 1',
  					start: fechaHoy,
            end: fechaHoy2,

  				},
          {
            id: 2,
            title: 'Evento de prueba id 2',
            start: '2016-10-25 10:10:56',
            end: '2016-10-25 11:10:56',

          },
  			],
        eventClick: function(calEvent, jsEvent, view) {

          $.get('nuevaHora/'+calEvent.id, function(data){
            $('#incluir-modal').html(data).promise().done(function(){
              $('#myModal').modal();
            })

          });

        }
  		});




})
