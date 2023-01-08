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
				<h1>Poisson Distribution Calculator</h1><hr>
				<p>Welcome to our Poisson Distribution Calculator!</p>
                <p>A Poisson distribution is a statistical distribution that describes the probability of a certain number of events occurring within a given time period or area. The probability of an event occurring is constant, and the events are independent of each other.</p>
                <p>To use our calculator, simply enter the mean number of occurrences per unit and the number of occurrences. Our calculator will then compute the probability of the Poisson distribution using the formula:</p>
                <p>Probability = (e^(-mean) * (mean^occurrences)) / (factorial of occurrences) where "e" is the mathematical constant approximately equal to 2.71828.</p>
                <p>Our calculator is fast, easy to use, and provides accurate results. Try it out now to see the probability of your Poisson distribution!"</p>
                <hr>
				<h2>Enter numbers:</h2>
				<input type = "text" id = "m" class = "input" placeholder="Mean...">
				<p>Mean number of occurrences per unit</p>
				<input type = "text" id = "x" class = "input" placeholder="x...">
				<p>Number of occurrences</p>
				<button onclick="Poisson()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Probability...">
				<p>Probability:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="poisson1.js"></script>
	</body>
</html>


