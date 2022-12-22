<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>BSS My Website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<?php include 'headerandnav.php'; ?>
		<div class="main">
			<?php include 'calculatoraside.php'; ?>
			<div class="article">
				<h1>Gap between two dates calculator</h1><hr>
				<p>This days between dates calculator will help you calculate how many days are between two given dates. For instance, if you are wondering how many days have passed since an event took place or the number of days until an event takes place, this how many days are there between two dates calculator is just what you need. As a bonus, you can express the results in seconds, minutes, hours, days, weeks, months, or years.</p><hr>
				<h2>Enter two dates:</h2>
				<input type = "date" id = "date1" class = "input">
				<p>Start Date:</p>
				<input type = "date" id = "date2" class = "input">
				<p>End Date:</p>
				<button onclick="Days()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Total...">
				<p>Gap of Days:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="gbtd1.js"></script>
	</body>
</html>


