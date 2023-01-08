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
			<?php include 'accountaside.php'; ?>
			<div class="article">
                <h1>Change Username</h1>
                <form action="updateusername.php" method="post">
                    <p>Confirm Username:</p>
                    <input type = "text" name = "ConUser" class = "input" placeholder="Confirm Username here..." maxlength="20" minlength="7" required><br>
                    <p>New Username:</p>
                    <input type = "text" name = "NewUser" class = "input" placeholder="New Username here..." maxlength="20" minlength="7" required><br>
					<h5>Username must be at least 7 characters and not greater than 20 characters</h5><br><br><br>
                    <button class="button-15" role="button" name="SetUser" type="submit">Change Username</button><br><br>
                </form>
                <?php

					if (isset($_POST['SetUser'])){

                    	$ConUser = $_POST['ConUser'];
                    	$NewUser = $_POST['NewUser'];

						include "classes/database.php";
                    	include "classes/username.php";

                    	$updateUser = new username($ConUser, $NewUser);
                    	$updateUser->updateUser();
                    	header('location:myaccount.php?username=success');
                	}

					$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if(strpos($url, "update=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "update=invaliduser")){ 
						echo "<p>Please enter valid username</p>";
					}
					if(strpos($url, "update=invalidlength")){ 
						echo "<p>Enter specified length</p>";
					}
					if(strpos($url, "error=queryfailed")){ 
						echo "<p>An error occured</p>";
					}
					if(strpos($url, "update=usernamedoesntmatch")){ 
						echo "<p>Username doesnt match</p>";
					}
                ?>
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