<?php

session_start(); 

if (isset($_SESSION["id"])){

?>
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
			<?php include 'improveaside.php'; ?>
			<div class="article">
				<h1>Posts</h1><hr>
                <h2><?php echo $_SESSION["title"]; ?></h2>
                <p><strong>Description:</strong><br><?php echo $_SESSION["descr"]; ?></p>
                <p><strong>Sample Input:</strong><br><?php echo $_SESSION["input"]; ?></p>
                <p><strong>Sample Output:</strong><br><?php echo $_SESSION["output"]; ?></p>
                <p><strong>Explanation:</strong><br><?php echo $_SESSION["expl"]; ?></p>
                <p><strong>Author:</strong><br><?php echo $_SESSION["author"]; ?></p>
                <p><strong>Date Published:</strong><br><?php echo $_SESSION["date"]; ?></p>
			</div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>


<?php

} 
else {
    header('location:login.php?login=youdidntlogin');
}

?>