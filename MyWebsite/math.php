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
				<p><a href="gbtd.php">Gap between two dates calculator</a>. This days between dates calculator will help you calculate how many days are between two given dates. For instance, if you are...</p>
                <p><a href="dotw.php">Day of the week calculator</a>The seven-day week originates from the calendar of the Babylonians, which in turn is based on a Sumerian calendar dated to 21st-century...</p>
				<p><a href="permutation.php">Permutation calculator</a>. Permutation is a counting technique which refers to the arrangement (or ordering) of a set of objects, from first to last, where...</p>
                <p><a href="combination.php">Combination calculator</a>. Combination is a selection of objects from a collection in any order as oppose to permutations which deal with the ordered...</p>
                <p><a href="hex.php">Hex Color Code Generator</a>. Hex color codes start with a pound sign or hashtag (#) and are followed by six letters and/or numbers. The first two letters/numbers...</p>
                <p><a href="infix.php">Infix to Postfix</a>. Infix expression is an expression in which the operator is in the middle of operands, like operand operator operand. Postfix expression is an...</p>
                <p><a href="postfix.php">Postfix to Result</a>. Infix expression is an expression in which the operator is in the middle of operands, like operand operator operand. Postfix expression is an...</p>
                <p><a href="bhoc.php">Binary, Hexa, Octal Converter</a>. Base 10 (Decimal) — Represent any number using 10 digits [0-9], Base 2 (Binary) — Represent any number using 2 digits [0-1],...</p>
                <p><a href="lcm.php">LCM Finder</a>. LCM is the short form for “Least Common Multiple.” The least common multiple is defined as the smallest multiple that two or more numbers have in...</p>
                <p><a href="gcf.php">GCF Finder</a>. The GCF of two or more non-zero integers, x, and y, is the greatest positive integer m, which divides both x and y. The greatest common factor is...</p>
                <p><a href="quadratic.php">Quadratic Equation calculator</a>. A quadratic equation is a second order equation written as ax2 + bx + c = 0 where a, b, and c are coefficients of real numbers...</p>
            </div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>


