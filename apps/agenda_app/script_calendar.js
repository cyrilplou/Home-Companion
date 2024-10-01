document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar')
    
    const calendar = new FullCalendar.Calendar(calendarEl, {
      
      events : [
        {
            title :'Soirée ceci',
            start : '2024-09-09'
        },
        {
            title :'event test',
            start : '2024-10-09'
        },
      ],
      eventColor: '#378006',
      eventClick: function(info) {
        alert('Event: ' + info.event.title);
        
    
        // change the border color just for fun
        info.el.style.borderColor = 'red';
      }
    })
    calendar.render()
  })

