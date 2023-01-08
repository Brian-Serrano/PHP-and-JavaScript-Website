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
				<h1>Keyword Cipher Encryption</h1><hr>
				<p>Our online keyword cipher encryptor allows you to easily encrypt your text using the keyword cipher method. The keyword cipher is a simple substitution cipher that replaces each letter of the plaintext with a letter that is a fixed number of positions down the alphabet, based on the corresponding letter of a keyword. Simply enter your plaintext and the keyword, and the encryptor will generate the encrypted text. The keyword cipher is not a very secure method of encryption, as it can be easily broken using frequency analysis, but it is a good tool for learning about substitution ciphers and encryption in general. Try it out now and see how easy it is to encrypt your text using the keyword cipher method!</p><hr>
				<h2>Enter values on fields:</h2>
				<input type = "text" id = "cha" class = "input" value="abcdefghijklmnopqrstuvwxyz">
				<p>Characters:</p>
                <input type = "text" id = "key" class = "input" value="Key">
				<p>Keyword:</p>
				<input type = "text" id = "plain" class = "input" value="Sample Text">
				<p>Plain text:</p>
				<button onclick="Keyword()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Encrypted text(in uppercase)...">
				<p>Encrypted Text:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="keyword.js"></script>
	</body>
</html>


