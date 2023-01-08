<?php

session_start();

if (isset($_SESSION["id"])) {
    header('location:index.php');
} else {
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
			<div class="article">
                <h1>Log In</h1>
                <form action="login.php" method="post">
                    <p>UserName:</p>
                    <input type = "text" name = "user" class = "input" placeholder="Username here..." maxlength="20" minlength="7" required><br>
                    <p>Password:</p>
                    <input type = "password" name = "pwd" id = "toggle" class = "input" placeholder="Password here..." maxlength="20" minlength="7" required><br><br><br>
                    <a onclick="myFunc()" class="hsp">Hide/Show Password</a><br><br><br><br>
                    <button class="button-15" role="button" name="login" type="submit">Log In</button>
                    <p>Don't have an account yet? <a href="signup.php">Sign Up Here</a></p>
                </form>
                <script>
                    function myFunc() {
                        var toggle = document.getElementById("toggle");
                        if(toggle.type == "password"){
                            toggle.type = "text";
                        } else {
                            toggle.type = "password";
                        }
                    }
                </script>
				<?php
				if (isset($_POST['login'])){

                    $user = $_POST['user'];
                    $pwd = $_POST['pwd'];

					include "classes/database.php";
                    include "classes/checkLogin.php";
                    include "classes/loginfunc.php";

                    $login = new loginfunc($user, $pwd);
                    $login->loginUser();
                    header('location:index.php');
                }

				$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                if(strpos($url, "login=noinput")){ 
                    echo "<p>You did not input</p>";
                }
                if(strpos($url, "login=usernotfound")){ 
                    echo "<p>User not found</p>";
                }
                if(strpos($url, "login=wrongpassword")){ 
                    echo "<p>Wrong password</p>";
                }
                if(strpos($url, "login=queryfailed")){ 
                    echo "<p>An error occured</p>";
                }
                if(strpos($url, "login=invalidlength")){ 
                    echo "<p>Enter specified length</p>";
                }
                if(strpos($url, "login=youdidntlogin")){ 
                    echo "<p>Login first to access</p>";
                }
                if(strpos($url, "error=queryfailed")){ 
                    echo "<p>An error occured</p>";
                }
				?>
            </div>
		</div>
		<?php include 'footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

<?php } ?>