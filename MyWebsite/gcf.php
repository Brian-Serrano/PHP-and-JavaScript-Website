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
				<h1>Greatest Common Factor Calculator</h1><hr>
				<p>Our online greatest common factor (GCF) calculator allows you to quickly and easily find the GCF of two or more numbers. The greatest common factor is the largest positive integer that divides into two or more numbers without a remainder. It is a useful concept in mathematics and has numerous applications, including in solving problems involving fractions and in finding the least common multiple (LCM). Simply enter the numbers for which you want to find the GCF and the calculator will automatically compute the result. This tool is useful for anyone studying mathematics or working with fractions. Try it out now and see how easy it is to find the greatest common factor of any set of numbers!</p><hr>
				<h2>Enter numbers seperated by space:</h2>
				<input type = "text" id = "gcf" class = "input" placeholder="Numbers here..."><br><br>
				<button onclick="GCF()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Result..."><br><br>
				<p>Result:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="gcf1.js"></script>
	</body>
</html>