document.addEventListener('DOMContentLoaded', function() {
  let formulario = document.querySelector("form");

  var calendarEl = document.getElementById('agenda');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: "es",
    headerToolbar: {
      left: 'prev, next today',
      center: 'title',
      right:  'dayGridMonth,timeGridWeek,timeGridDay',
    },
    buttonText: {
      today: 'Hoy',
      month: 'Mes',
      week: 'Semana',
      day: 'Día'
    },
    dateClick: function(info) {
      var modal = document.getElementById('evento');
      if (modal) {
        modal.classList.add('show');
        modal.style.display = 'block';
        modal.style.opacity = 1;
      }
    }  
  });
  calendar.render();

  var agregarEventoURL = "{{ route('eventos.store') }}";

  document.getElementById("btnGuardar").addEventListener("click", function() {
    const datos = new FormData(formulario);
    console.log(datos);
    axios.post(agregarEventoURL, datos)
      .then((respuesta) => {
        $("#evento").modal("hide");
      })
      .catch(error => {
        if (error.response) {
          console.log(error.response.data);
        }
      });
  });
});

