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
				<h2><a href="caesar.php">Caesar Cipher</a></h2>
				<h2><a href="keyword.php">Keyword Cipher</a></h2>
				<h2><a href="giovanni.php">Giovanni Cipher</a></h2>
				<h2><a href="transposition.php">Transposition Cipher</a></h2>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>