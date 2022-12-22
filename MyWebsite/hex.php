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
				<h1>Hex Color Code Generator</h1><hr>
				<p>Hex color codes start with a pound sign or hashtag (#) and are followed by six letters and/or numbers. The first two letters/numbers refer to red, the next two refer to green, and the last two refer to blue. The color values are defined in values between 00 and FF (instead of from 0 to 255 in RGB).</p><hr>
				<h2>Enter RGB Numbers:</h2>
                <div class="section">
                    <div class="sect">
                        <input type = "text" id = "red" class = "input" placeholder="Red(0-255)...">
				        <p>Red(From: 0 To: 255)</p>
                    </div>
                    <div class="sect">
				        <input type = "text" id = "green" class = "input" placeholder="Green(0-255)...">
				        <p>Green(From: 0 To: 255)</p>
                    </div>
                    <div class="sect">
                        <input type = "text" id = "blue" class = "input" placeholder="Blue(0-255)...">
				        <p>Blue(From: 0 To: 255)</p>
                    </div>
                </div>
				<button onclick="Hex()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Hex Value...">
				<p>Hex color code:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="hex1.js"></script>
	</body>
</html>


