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
				<h1>RGB to Hex Converter</h1><hr>
				<p>Our online RGB to Hex color code converter allows you to quickly and easily convert RGB (Red, Green, Blue) colors to their corresponding Hex code values. RGB colors are used in digital media and on the internet to represent a vast array of colors, and the Hex code is a convenient way to specify a particular color in HTML, CSS, and other programming languages. Simply enter the values for Red, Green, and Blue, and the converter will automatically generate the corresponding Hex code. You can also enter a Hex code and the converter will display the corresponding RGB values. This tool is useful for web development, graphic design, and any other situation where you need to specify colors using Hex code values. Try it out now and easily convert between RGB and Hex codes!</p><hr>
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


