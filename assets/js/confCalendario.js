document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: '',
            center: 'title',
            right: '', 
        },
        titleFormat: { // will produce something like "Tuesday, September 18, 2018"
            month: 'long',
        },
        themeSystem: 'bootstrap5',
        dayMaxEvents: true,
        businessHours: true, // display business hours
        editable: false,
        selectable: true
        // allow "more" link when too many events

        });
        calendar.setOption('locale', 'pt-br');   
        calendar.render();
})