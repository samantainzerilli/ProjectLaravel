document.addEventListener('DOMContentLoaded', function() {
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
      }
    });
    calendar.render();
  });