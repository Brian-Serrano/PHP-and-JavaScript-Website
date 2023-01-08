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
				<h1>Quadratic Equation Calculator</h1><hr>
				<p>Our online quadratic equation calculator allows you to quickly and easily solve quadratic equations of the form ax^2 + bx + c = 0. A quadratic equation is a second-order polynomial equation that can be solved using the quadratic formula: x = (-b +/- sqrt(b^2 - 4ac)) / (2a). Simply enter the values of a, b, and c, and the calculator will automatically generate the solutions for x. If the equation has no real solutions, the calculator will inform you that the equation has no real roots. This tool is useful for anyone studying algebra or working with quadratic equations. Try it out now and see how easy it is to solve quadratic equations!</p><hr>
				<h2>Enter 3 numbers:</h2>
                <div class="section">
                    <div class="sect">
                        <input type = "text" id = "num1" class = "input" placeholder="First Number...">
				        <p>First Number</p>
                    </div>
                    <div class="sect">
				        <input type = "text" id = "num2" class = "input" placeholder="Second Number...">
				        <p>Second Number</p>
                    </div>
                    <div class="sect">
                        <input type = "text" id = "num3" class = "input" placeholder="Third Number...">
				        <p>Third Number</p>
                    </div>
                </div>
				<button onclick="Quad()" class="button-15" role="button">Submit</button><br><br>
				<textarea id="demo" class="form-control" rows="5" placeholder="Roots..."></textarea>
				<p>Root numbers:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="quadratic1.js"></script>
	</body>
</html>