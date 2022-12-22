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
				<h1>Day of the Week</h1><hr>
				<p>The seven-day week originates from the calendar of the Babylonians, which in turn is based on a Sumerian calendar dated to 21st-century B.C. Seven days corresponds to the time it takes for a moon to transition between each phase: full, waning half, new and waxing half.</p><hr>
				<h2>Enter a date:</h2>
				<input type = "date" id = "date" class = "input"><br><br>
				<button onclick="Day()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Day...">
				<p>Day of the week:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="dotw1.js"></script>
	</body>
</html>


