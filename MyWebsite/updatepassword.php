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
                <h1>Change Password</h1>
                <form action="updatepassword.php" method="post">
                    <p>Confirm Password:</p>
                    <input type = "password" name = "ConPwd" id = "toggle1" class = "input" placeholder="Confirm Password here..." maxlength="20" minlength="7" required><br>
                    <p>New Password:</p>
                    <input type = "password" name = "NewPwd" id = "toggle2" class = "input" placeholder="New Password here..." maxlength="20" minlength="7" required><br>
					<h5>Password must be at least 7 characters and not greater than 20 characters<br>and must include at least one uppercase letter, number and special character</h5><br><br><br>
					<a onclick="myFunc()" class="hsp">Hide/Show Password</a><br><br><br><br>
                    <button class="button-15" role="button" name="SetPwd" type="submit">Change Password</button><br><br>
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

				    if (isset($_POST['SetPwd'])){

                        $ConPwd = $_POST['ConPwd'];
                        $NewPwd = $_POST['NewPwd'];

					    include "classes/database.php";
                        include "classes/password.php";

                        $updatePwd = new password($ConPwd, $NewPwd);
                        $updatePwd->updatePwd();
                        header('location:myaccount.php?password=success');
                    }

                    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if(strpos($url, "update=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "update=invalidpassword")){ 
						echo "<p>Please enter valid password</p>";
					}
					if(strpos($url, "update=invalidlength")){ 
						echo "<p>Enter specified length</p>";
					}
					if(strpos($url, "error=queryfailed")){ 
						echo "<p>An error occured</p>";
					}
					if(strpos($url, "update=passworddoesntmatch")){ 
						echo "<p>Password doesnt match</p>";
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