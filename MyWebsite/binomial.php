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
				<h1>Binomial Probability Distribution Calculator</h1><hr>
				<p>Welcome to our Binomial Probability Distribution Calculator!</p>
                <p>A binomial distribution is a statistical distribution that describes the probability of a certain number of successes in a fixed number of trials. The probability of success on any single trial is constant, and the trials are independent of each other.</p>
                <p>To use our calculator, simply enter the number of trials, the probability of success on any single trial, and the number of successes in the sample. Our calculator will then compute the probability of the binomial distribution using the formula:</p>
                <p>Probability = (factorial of trials) / (factorial of successes * factorial of failures) * (probability of success ** number of successes) * (probability of failure ** number of failures) where "failures" is the number of trials minus the number of successes.</p>
                <p>Our calculator is fast, easy to use, and provides accurate results. Try it out now to see the probability of your binomial distribution!"</p>
                <hr>
				<h2>Enter Numbers:</h2>
                <div class="section">
                    <div class="sect">
                        <input type = "text" id = "trials" class = "input" placeholder="n...">
				        <p>The number of trials (N)</p>
                    </div>
                    <div class="sect">
				        <input type = "text" id = "probabilities" class = "input" placeholder="p...">
				        <p>The probability of a success on any single trial (P)</p>
                    </div>
                    <div class="sect">
                        <input type = "text" id = "successes" class = "input" placeholder="r...">
				        <p>The number of successes in sample (R)</p>
                    </div>
                </div>
				<button onclick="Binomial()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Probability...">
				<p>Probability:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="binomial1.js"></script>
	</body>
</html>


