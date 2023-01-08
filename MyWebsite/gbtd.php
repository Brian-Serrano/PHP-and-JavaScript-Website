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
				<p>Our online gap between two dates calculator allows you to quickly and easily determine the number of days, months, and years between two specific dates. Simply enter the start and end dates, and the calculator will automatically calculate the duration of the time period in days, months, and years. This tool is useful for calculating the age of someone, determining how much time has passed since an event occurred, or planning the duration of a project. The calculator takes into account the different lengths of months and leap years, so you can trust that the results are accurate. Try it out now and see how much time has passed between any two dates!</p><hr>
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


