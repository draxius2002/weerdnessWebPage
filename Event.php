<?php include_once 'header.php';
include_once 'Xconnection.php';

?>

<!-- Title -->
<title>FFG - Event</title>

<head>


    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/list/main.css' rel='stylesheet' />

    <script src='fullcalendar/packages/core/main.js'></script>
    <script src='fullcalendar/packages/list/main.js'></script>
    <script src='fullcalendar/packages/daygrid/main.js'></script>
    <script src='fullcalendar/packages/google-calendar/main.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: ['dayGrid', 'googleCalendar', 'list'],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                googleCalendarApiKey: 'AIzaSyD-eos3wE0wJ3UK1OI7raNLzJCh0EgUAW0',
                events: {
                    googleCalendarId: 'inquiry.ffg@gmail.com'
                }
            });

            calendar.render();
        });

        calendar.setOption('contentHeight', 200);
    </script>
</head>

<body>

    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(img/bg-img/calendar.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Event</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="yummy-load"></div>
    </div>

    <div class="container h-100 pt-5">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div id='calendar'></div>
            </div>
        </div>
    </div>

    <!-- ****** Our Creative Portfolio Area End ****** -->

    <?php include_once 'footer.php';
    include_once 'script.php'; ?>
</body>