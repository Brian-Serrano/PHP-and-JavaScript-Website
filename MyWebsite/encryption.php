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
                <?php
				if (isset($_SESSION["id"])){
					echo "<h1>Hi ".$_SESSION["user"].". You can find the solution here</h1>";
				} else {
					echo "<h1>Hi User. You can find the solution here</h1>";
				}
				?>
				<hr>
				<p><a href="caesar.php">Caesar Cipher</a>. It is one of the earliest known and simplest ciphers. It is a type of substitution cipher in which each letter in the plaintext is shifted...</p>
				<p><a href="keyword.php">Keyword Cipher</a>. To use this method for constructing the ciphertext alphabet, pick a keyword and write it down while ignoring the repeated letters...</p>
				<p><a href="giovanni.php">Giovanni Cipher</a>. Around 1580, Giovanni Battista Argenti suggested that one can also pick a keyletter and begin the keyword UNDER that letter of the...</p>
				<p><a href="transposition.php">Transposition Cipher</a>. A transposition cipher is archived by performing some permutation on the plaintext letters. The simplest such cipher is the rail...</p>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>