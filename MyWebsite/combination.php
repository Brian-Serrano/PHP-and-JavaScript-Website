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
				<h1>Combination Calculator</h1><hr>
				<p>Combination is a selection of objects from a collection in any order as oppose to permutations which deal with the ordered arrangements of objects. In a combination in which r objects can be selected from a set of n objects, the selection rules are: the order of selection does not matter (the same objects selected in different orders are regarded as the same combination); each object can be selected only once; this implies that you are not allowed any repeat numbers.</p><hr>
				<h2>Enter the numbers:</h2>
				<input type = "text" id = "n" class = "input" placeholder="N...">
				<p>Number of objects to choose from:</p>
				<input type = "text" id = "r" class = "input" placeholder="R...">
				<p>Number of objects selected:</p>
				<button onclick="Comb()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Total...">
				<p>Combination:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="combination1.js"></script>
	</body>
</html>


