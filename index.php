<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="includes/style.css">
<meta charset="utf-8">
	<title>HolOS</title>
</head>
<body>

<div id="clock"></div>
<div id="transit" style="margin-top: -350px; filter: invert(100%);">
	<embed src="http://jl.oulunliikenne.fi/#/schedules/departures?stopName=Kotkantie%20P&stopCode=2212&stopGroupDepartures=true" 
	style="width:280px; height: 675px;">
</div>

<div id="day"></div>
<div id="date"></div>

<div id="temp-out-info">
	<p>OUT: </p>
</div>

<div id="temp-out">

	<a class="weatherwidget-io" href="https://forecast7.com/en/65d0125d47/oulu/" data-font="Helvetica" data-mode="Current" data-days="3" data-theme="dark" >Oulu, Suomi</a>
	<script>
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
	</script>
</div>

<div id="temp-in-info">
	<p>IN: </p>
</div>

<div id="temp-in"></div>

<script type="text/javascript">

window.setInterval(function(){
	$(document).ready(function() {
		$('#temp-in').load("includes/get-temp.php");
	});
	console.log('new temp-in');
}, 2000);
	
function showTime() {
	var date = new Date();
	var h = date.getHours();
	var m = date.getMinutes();

	h = (h < 10) ? "0" + h : h;
	m = (m < 10) ? "0" + m : m;
		
	var time = h + ":" + m;
	document.getElementById("clock").innerText = time;
	document.getElementById("clock").textContent = time;

	setTimeout(showTime, 1000);
}

function showDay() {
	var days = ['Sunnuntai', 'Maanantai', 'Tiistai', 'Keskiviikko', 'Torstai', 'Perjantai', 'Lauantai'];

	var date = new Date();
	var daynumber = date.getDay();
	var dayName = days[daynumber];

	//var d = new Date(dateString);
	//var dayName = days[d.getDay()];

	document.getElementById("day").innerText = dayName;
	document.getElementById("day").textContent = dayName;

	setTimeout(showTime, 1000);
}

function showDate() {
	var date = new Date();
	var d = date.getDate();
	var m = 1 + date.getMonth();
	var y = date.getFullYear();

	var day = d + "." + m + "." + y;
	document.getElementById("date").innerText = day;
	document.getElementById("date").textContent = day;

	setTimeout(showTime, 1000);
}

showTime();
showDate();
showDay();

</script>

</body>
</html>