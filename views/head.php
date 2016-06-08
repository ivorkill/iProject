<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Agenda</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/freelancer.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<script src="js/jquery.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<!-- <script src="js/classie.js"></script> -->
	<!-- <script src="js/cbpAnimatedHeader.js"></script> -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/freelancer.js"></script> -->
	<link rel='stylesheet' href='css/fullcalendar.css'/>
	<script src='js/lib/jquery.min.js'></script>
	<script src='js/lib/moment.min.js'></script>
	<script src='js/fullcalendar.js'></script>
	<script>
	$(document).ready(function() {
  		var date = new Date();
  		var d = date.getDate();
  		var m = date.getMonth();
  		var y = date.getFullYear();

  		var calendar = $('#calendar').fullCalendar({
   		editable: true,
   		header: {
    		left: 'prev,next today',
    		center: 'title',
    		right: 'month,agendaWeek,agendaDay'
   		},

   		events: "http://localhost/school/bewijzenmap/jaar_2/periode_4/proj/iProject/models/select_events.php",

   		// Convert the allDay from string to boolean
   		eventRender: function(event, element, view) {
    		if (event.allDay === 'true') {
     			event.allDay = true;
    		} else {
     		event.allDay = false;
    		}
   		},
   		selectable: true,
   		selectHelper: true,
   		select: function(start, end, allDay) {
   			var title = prompt('Event Title:');
   			if (title) {
   				var start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
   				var end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
   				$.ajax({
   					url: 'http://localhost/school/bewijzenmap/jaar_2/periode_4/proj/iProject/models/add_events.php',
   					data: 'title='+ title+'&start='+ start +'&end='+ end ,
   					type: "POST",
   					success: function(json) {
   						alert('Added Successfully');
   					}
   				});
   				calendar.fullCalendar('renderEvent',
   				{
   					title: title,
   					start: start,
   					end: end,
   					allDay: allDay
   				},
   				true // make the event "stick"
   				);
   			}
   			calendar.fullCalendar('unselect');
   		},

   		editable: true,
   		eventDrop: function(event, delta) {
   			var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
   			var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
   			$.ajax({
   				url: 'http://localhost/school/bewijzenmap/jaar_2/periode_4/proj/iProject/models/update_events.php',
   				data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
   				type: "POST",
   				success: function(json) {
    				alert("Updated Successfully");
   				}
   			});
   		},
   		eventResize: function(event) {
   			var start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
   			var end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
   				$.ajax({
    			url: 'http://localhost/school/bewijzenmap/jaar_2/periode_4/proj/iProject/models/update_events.php',
    			data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
    			type: "POST",
    			success: function(json) {
     				alert("Updated Successfully");
    			}
   			});
		},
		eventClick: function(event) {
			var decision = confirm("Do you really want to do that?");
			if (decision) {
				$.ajax({
					type: "POST",
					url: "http://localhost/school/bewijzenmap/jaar_2/periode_4/proj/iProject/models/delete_events.php",
					data: "&id=" + event.id
				});
				$('#calendar2').fullCalendar('removeEvents', event.id);
			} else {
			}
		}
  		});
 	});
	</script>
</head>
<body id="page-top" class="index">
<div id="calendar"></div>
