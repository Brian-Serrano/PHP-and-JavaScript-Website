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
			<?php include 'encryptionaside.php'; ?>
			<div class="article">
				<h1>Transposition Cipher Encryption</h1><hr>
				<p>Our online transposition cipher encryptor allows you to easily encrypt your text using the transposition cipher method. The transposition cipher is a type of encryption that rearranges the letters of the plaintext according to a specific rule or pattern, rather than replacing them with other letters. Simply enter your plaintext and the key (the rule or pattern to follow), and the encryptor will generate the encrypted text. The transposition cipher is not a very secure method of encryption, as it can be easily broken using letter frequency analysis, but it is a good tool for learning about different types of ciphers and encryption in general. Try it out now and see how easy it is to encrypt your text using the transposition cipher method!</p><hr>
				<h2>Enter values on fields:</h2>
				<input type = "text" id = "plain" class = "input" value="Sample Text">
				<p>Plain text:</p>
				<button onclick="Transposition()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Encrypted text(in uppercase)...">
				<p>Encrypted Text:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="transposition.js"></script>
	</body>
</html>


