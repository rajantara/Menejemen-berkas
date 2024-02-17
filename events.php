<?php
include('partials/header.php');
include "server/koneksi.php";
?>

<!-- navbar -->
<?php
include('partials/navbar.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>FullCalendar</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
</head>

<body>
	<div id="calendar"></div>

	<script>
		$(function() {
			var todayDate = moment().startOf('day');
			var YM = todayDate.format('YYYY-MM');
			var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
			var TODAY = todayDate.format('YYYY-MM-DD');
			var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay,listWeek'
				},
				editable: true,
				eventLimit: true,
				navLinks: true,
				backgroundColor: '#1f2e86',
				eventTextColor: '#1f2e86',
				textColor: '#378006',
				dayClick: function(date, jsEvent, view) {
					alert('Clicked on: ' + date.format());
					alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
					alert('Current view: ' + view.name);
					$(this).css('background-color', 'red');
				},
				events: [{
						title: 'All Day Event',
						start: YM + '-01',
						color: '#006DF0'
					},
					{
						title: 'Long Event',
						start: YM + '-07',
						end: YM + '-10',
						color: '#933EC5'
					},
					{
						id: 999,
						title: 'Repeating Event',
						start: YM + '-09T16:00:00',
						color: '#65b12d'
					},
					// Add more events here...
				]
			});
		});
	</script>
</body>

</html>


<!-- jquery
		============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
		============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script src="js/wow.min.js"></script>
<!-- price-slider JS
		============================================ -->
<script src="js/jquery-price-slider.js"></script>
<!-- meanmenu JS
		============================================ -->
<script src="js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
		============================================ -->
<script src="js/owl.carousel.min.js"></script>
<!-- sticky JS
		============================================ -->
<script src="js/jquery.sticky.js"></script>
<!-- scrollUp JS
		============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
		============================================ -->
<script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
		============================================ -->
<script src="js/metisMenu/metisMenu.min.js"></script>
<script src="js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
		============================================ -->
<script src="js/sparkline/jquery.sparkline.min.js"></script>
<script src="js/sparkline/jquery.charts-sparkline.js"></script>
<script src="js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
		============================================ -->
<script src="js/calendar/moment.min.js"></script>
<script src="js/calendar/fullcalendar.min.js"></script>
<script src="js/calendar/fullcalendar-active.js"></script>
<!-- plugins JS
		============================================ -->
<script src="js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script src="js/main.js"></script>
<!-- tawk chat JS
		============================================ -->
<script src="js/tawk-chat.js"></script>
</body>

</html>