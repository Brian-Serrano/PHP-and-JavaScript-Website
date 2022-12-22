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
				<h1>Infix to Postfix</h1><hr>
				<p>Infix expression is an expression in which the operator is in the middle of operands, like operand operator operand. Postfix expression is an expression in which the operator is after operands, like operand operator. Postfix expressions are easily computed by the system but are not human readable.</p><hr>
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


