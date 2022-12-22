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
				<h1>Permutation Calculator</h1><hr>
				<p>Permutation is a counting technique which refers to the arrangement (or ordering) of a set of objects, from first to last, where the order in which the objects are selected does matter. In a permutation n different objects taken r at a time (where r is a subset of n), an event cannot repeat.</p><hr>
				<h2>Enter the numbers:</h2>
				<input type = "text" id = "n" class = "input" placeholder="N...">
				<p>Number of objects to choose from:</p>
				<input type = "text" id = "r" class = "input" placeholder="R...">
				<p>Number of objects selected:</p>
				<button onclick="Perm()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Total...">
				<p>Permutation:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="permutation1.js"></script>
	</body>
</html>


