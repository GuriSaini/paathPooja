<?php
//index.php




?>
<!DOCTYPE html>
<html>
 <head>
  <title>Fullcalandar Integration</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet' />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script>
   
  $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    plugins: [ 'bootstrap' ],
  themeSystem: 'bootstrap',
    header:{
     left:'prev,next today',
     center:'title',
     right:''
    },
    events: 'controller/load.php',
    eventLimit: true,
    aspectRatio: 0.6,
    height : 500,

   });
  });
   
  </script>
 </head>
 <body>
  <br />
  <br />
  <div class="container">
   <div id="calendar"></div>
  </div>
 </body>
</html>