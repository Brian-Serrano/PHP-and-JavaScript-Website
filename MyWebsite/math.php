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
                <?php
				if (isset($_SESSION["id"])){
					echo "<h1>Hi ".$_SESSION["user"].". You can find the solution here</h1>";
				} else {
					echo "<h1>Hi User. You can find the solution here</h1>";
				}
				?>
				<hr>
				<h2><a href="gbtd.php">Gap between two dates calculator</a></h2>
                <h2><a href="dotw.php">Day of the week calculator</a></h2>
				<h2><a href="permutation.php">Permutation calculator</a></h2>
                <h2><a href="combination.php">Combination calculator</a></h2>
                <h2><a href="hex.php">Hex Color Code Generator</a></h2>
                <h2><a href="infix.php">Infix to Postfix</a></h2>
                <h2><a href="postfix.php">Postfix to Result</a></h2>
                <h2><a href="bhoc.php">Binary, Hexa, Octal Converter</a></h2>
                <h2><a href="lcm.php">LCM Finder</a></h2>
                <h2><a href="gcf.php">GCF Finder</a></h2>
                <h2><a href="quadratic.php">Quadratic Equation calculator</a></h2>
				<h2><a href="binomial.php">Binomial Probability Distribution Calculator</a></h2>
				<h2><a href="poisson.php">Poisson Distribution Calculator</a></h2>
            </div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>


