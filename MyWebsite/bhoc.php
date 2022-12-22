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
				<h1>Binary, Hexadecimal, Decimal, and Octal Converter</h1><hr>
				<p>Base 10 (Decimal) — Represent any number using 10 digits [0-9], Base 2 (Binary) — Represent any number using 2 digits [0-1], Base 8 (Octal) — Represent any number using 8 digits [0-7], Base 16(Hexadecimal) — Represent any number using 10 digits and 6 characters [0-9, A, B, C, D, E, F]</p><hr>
				<h2>Decimal:</h2>
				<input type = "text" id = "dec" class = "input" placeholder="Number here..."><br><br>
				<button onclick="Dec()" class="button-15" role="button">Submit</button><br><br>
				<textarea id="res1" class="form-control" rows="5"></textarea><br><br>
				<p>Result:</p>
				<br><br>
                <h2>Binary:</h2>
				<input type = "text" id = "bin" class = "input" placeholder="Number here..."><br><br>
				<button onclick="Bin()" class="button-15" role="button">Submit</button><br><br>
				<textarea id="res2" class="form-control" rows="5"></textarea><br><br>
				<p>Result:</p>
				<br><br>
                <h2>Octal:</h2>
				<input type = "text" id = "oct" class = "input" placeholder="Number here..."><br><br>
				<button onclick="Oct()" class="button-15" role="button">Submit</button><br><br>
				<textarea id="res3" class="form-control" rows="5"></textarea><br><br>
				<p>Result:</p>
				<br><br>
                <h2>Hexadecimal:</h2>
				<input type = "text" id = "hex" class = "input" placeholder="Number here..."><br><br>
				<button onclick="Hex()" class="button-15" role="button">Submit</button><br><br>
				<textarea id="res4" class="form-control" rows="5"></textarea><br><br>
				<p>Result:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="bhoc1.js"></script>
	</body>
</html>