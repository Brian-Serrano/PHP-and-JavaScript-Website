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
				<h1>Infix to Postfix Converter</h1><hr>
				<p>Our online infix to postfix converter allows you to quickly and easily convert an expression written in infix notation to postfix notation (also known as reverse polish notation). Infix notation is the most common way of writing mathematical and logical expressions, but postfix notation has several advantages, including the fact that it does not require the use of parentheses to specify the order of operations. Simply enter an expression in infix notation and the converter will generate the equivalent expression in postfix notation. This tool is useful for computer science and programming applications, where postfix notation is often used to evaluate expressions. Try it out now and see how easy it is to convert between infix and postfix notation!</p><hr>
				<h2>Enter infix expression:</h2>
				<input type = "text" id = "infix" class = "input" placeholder="infix..."><br><br>
				<button onclick="Infix()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="postfix..."><br><br>
				<p>Postfix Expression:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="infix1.js"></script>
	</body>
</html>


