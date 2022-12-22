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
				<h1>Least Common Multiple</h1><hr>
				<p>LCM is the short form for “Least Common Multiple.” The least common multiple is defined as the smallest multiple that two or more numbers have in common. For example: Take two integers, 2 and 3. Multiples of 2: 2, 4, 6, 8, 10, 12, 14, 16, 18, 20…. Multiples of 3: 3, 6, 9, 12, 15, 18, 21, 24, 27, 30 ….</p><hr>
				<h2>Enter numbers seperated by space:</h2>
				<input type = "text" id = "lcm" class = "input" placeholder="Numbers here..."><br><br>
				<button onclick="LCM()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Result..."><br><br>
				<p>Result:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="lcm1.js"></script>
	</body>
</html>


