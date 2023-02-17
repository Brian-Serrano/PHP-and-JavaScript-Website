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
                <h1>Sign Up</h1>
                <form action="signup.php" method="post">
                    <p>UserName:</p>
                    <input type = "text" name = "user" class = "input" placeholder="Username here..." maxlength="20" minlength="7" title="Username must be at least 7 characters and not greater than 20 characters" required><br>
                    <p>Email Address:</p>
                    <input type = "email" name = "email" class = "input" placeholder="Email address here..." maxlength="40" minlength="10" title="Email should have valid format" required><br>
                    <p>Password:</p>
                    <input type = "password" name = "pwd" id = "toggle1" class = "input" placeholder="Password here..." maxlength="20" minlength="7" title="Password must be at least 7 characters and not greater than 20 characters and must include at least one uppercase letter, number and special character" required><br>
                    <p>Confirm Password:</p>
                    <input type = "password" name = "confPwd" id = "toggle2" class = "input" placeholder="Confirm password here..." maxlength="20" minlength="7" title="Confirm password should be the same with password" required><br><br><br>
                    <a onclick="myFunc()" class="hsp">Hide/Show Password</a><br><br><br><br>
                    <button class="button-15" role="button" name="signup" type="submit">Sign Up</button>
                </form>
                <script>
                    function myFunc() {
                        var toggle1 = document.getElementById("toggle1");
                        var toggle2 = document.getElementById("toggle2");
                        if(toggle1.type == "password"){
                            toggle1.type = "text";
                            toggle2.type = "text";

                        } else {
                            toggle1.type = "password";
                            toggle2.type = "password";
                        }
                    }
                </script>
                <?php
                    if (isset($_POST['signup'])) {

                        $user = $_POST['user'];
                        $email = $_POST['email'];
                        $pwd = $_POST['pwd'];
                        $confPwd = $_POST['confPwd'];

                        include "classes/database.php";
                        include "classes/checkSignup.php";
                        include "classes/signupfunc.php";

                        $signup = new signupfunc($user, $email, $pwd, $confPwd);
                        $signup->signupUser();
                        header('location:index.php');
                    }

                    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    if (strpos($url, "signup=noinput")) {
                        echo "<p>You did not input</p>";
                    }
                    if (strpos($url, "signup=user")) {
                        echo "<p>Username Validation Failed</p>";
                    }
                    if (strpos($url, "signup=pwdvalidation")) {
                        echo "<p>Password Validation Failed</p>";
                    }
                    if (strpos($url, "signup=email")) {
                        echo "<p>Invalid email address</p>";
                    }
                    if (strpos($url, "signup=password")) {
                        echo "<p>Passwords don't match</p>";
                    }
                    if (strpos($url, "signup=taken")) {
                        echo "<p>Username or Email Already exists</p>";
                    }
                    if(strpos($url, "signup=invalidlength")){ 
                        echo "<p>Enter specified length</p>";
                    }
                    if (strpos($url, "signup=queryfailed")) {
                        echo "<p>An error occured</p>";
                    }
                    if (strpos($url, "error=queryfailed")) {
                        echo "<p>An error occured</p>";
                    }
                ?>
                <br><br>
            </div>
		</div>
		<?php include 'footer.php'; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
	</body>
</html>

<?php } ?>