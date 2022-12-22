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
				<h1>Giovanni Cipher Encryption</h1><hr>
				<p>Around 1580, Giovanni Battista Argenti suggested that one can also pick a keyletter and begin the keyword UNDER that letter of the plaintext. The Argentis, Giovanni, and his nephew Matteo, come from one of the great cryptology families of the middle ages. After many years of trying, Giovanni finally became the papal secretary of ciphers in Rome in 1950, only to quickly weaken from the frequency necessary trips to Germany and France.</p><hr>
				<h2>Enter values on fields:</h2>
				<input type = "text" id = "cha" class = "input" value="abcdefghijklmnopqrstuvwxyz">
				<p>Characters:</p>
                <input type = "text" id = "shift" class = "input" value="a">
				<p>Keyletter:</p>
                <input type = "text" id = "key" class = "input" value="Key">
				<p>Keyword:</p>
				<input type = "text" id = "plain" class = "input" value="Sample Text">
				<p>Plain text:</p>
				<button onclick="Giovanni()" class="button-15" role="button">Submit</button><br><br>
				<input type = "text" id = "demo" class = "input" placeholder="Encrypted text(in uppercase)...">
				<p>Encrypted Text:</p>
				<br><br>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="giovanni.js"></script>
	</body>
</html>


