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
				<h1>Postfix Evaluation Calculator</h1><hr>
				<p>Our online postfix evaluation calculator allows you to quickly and easily evaluate expressions written in postfix notation (also known as reverse polish notation). Postfix notation is a way of writing mathematical and logical expressions that does not require the use of parentheses to specify the order of operations. Simply enter an expression in postfix notation and the calculator will generate the result of the evaluation. This tool is useful for computer science and programming applications, where postfix notation is often used to evaluate expressions. Try it out now and see how easy it is to evaluate expressions in postfix notation!</p><hr>
				<h2>Enter postfix expression(Seperated by space):</h2>
				<input type = "text" id = "postfix" class = "input" placeholder="postfix..."><br><br>
				<button onclick="Postfix()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="result..."><br><br>
				<p>Result:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="postfix1.js"></script>
	</body>
</html>


