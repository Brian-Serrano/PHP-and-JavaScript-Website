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
				<h1>Greatest Common Factor</h1><hr>
				<p>The GCF of two or more non-zero integers, x, and y, is the greatest positive integer m, which divides both x and y. The greatest common factor is commonly known as GCF. Here, greatest can be replaced with highest, and factor can be replaced with divisor. So, the greatest common factor is also known as Highest Common Divisor (HCD), Highest Common Factor (HCF), or Greatest Common Divisor (GCD).</p><hr>
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