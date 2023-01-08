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
				<h1>My Account</h1>
				<table id="info">
					<tr>
						<th>Key</th>
						<th>Value</th>
						<th>Edit</th>
					</tr>
					<tr>
						<td>Username:</td>
						<td><?php echo $_SESSION["user"]; ?></td>
						<td><a class="button-15" role="button" href="updateusername.php">Edit</a></td>
					</tr>
					<tr>
						<td>Email Address:</td>
						<td><?php echo $_SESSION['email']; ?></td>
						<td><a class="button-15" role="button">Edit</a></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td>&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;</td>
						<td><a class="button-15" role="button" href="updatepassword.php">Edit</a></td>
					</tr>
					<tr>
						<td>Age:</td>
						<td><?php echo $_SESSION["age"]; ?></td>
						<td><a class="button-15" role="button" onclick="myFunc(0);">Edit</a></td>
					</tr>
					<tr>
						<td>Contact:</td>
						<td><?php echo $_SESSION["contact"]; ?></td>
						<td><a class="button-15" role="button" onclick="myFunc(1);">Edit</a></td>
					</tr>
					<tr>
						<td>Job:</td>
						<td><?php echo $_SESSION["job"]; ?></td>
						<td><a class="button-15" role="button" onclick="myFunc(2);">Edit</a></td>
					</tr>
					<tr>
						<td>Company:</td>
						<td><?php echo $_SESSION["company"]; ?></td>
						<td><a class="button-15" role="button" onclick="myFunc(3);">Edit</a></td>
					</tr>
					<tr>
						<td>About Yourself:</td>
						<td><?php echo $_SESSION["summary"]; ?></td>
						<td><a class="button-15" role="button" onclick="myFunc(4);">Edit</a></td>
					</tr>
					<tr>
						<td>Quiz Highscore:</td>
						<td><?php echo $_SESSION["score"]; ?></td>
						<td><a class="button-15" role="button">Edit</a></td>
					</tr>
				</table><br><br>
				<?php

					if(isset($_POST["setAge"])){

						$age = $_POST["age"];

						include "classes/database.php";
						include "classes/age.php";

						$myAge = new age($age);
						$myAge->setAge();
						header('location:myaccount.php?age=success');
					}

					if(isset($_POST["setContact"])){

						$contact = $_POST["contact"];

						include "classes/database.php";
						include "classes/contact.php";

						$myContact = new contact($contact);
						$myContact->setContact();
						header('location:myaccount.php?contact=success');
					}

					if(isset($_POST["setJob"])){

						$job = $_POST["job"];

						include "classes/database.php";
						include "classes/job.php";

						$myJob = new job($job);
						$myJob->setJob();
						header('location:myaccount.php?job=success');
					}

					if(isset($_POST["setCompany"])){

						$company = $_POST["company"];

						include "classes/database.php";
						include "classes/company.php";

						$myCompany = new company($company);
						$myCompany->setCompany();
						header('location:myaccount.php?company=success');
					}

					if(isset($_POST["setInfo"])){

						$info = $_POST["info"];

						include "classes/database.php";
						include "classes/info.php";

						$myInfo = new info($info);
						$myInfo->setInfo();
						header('location:myaccount.php?info=success');
					}
					
					$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					if(strpos($url, "username=success")){ 
						echo "<p>Username updated successfully</p>";
					}
					if(strpos($url, "password=success")){ 
						echo "<p>Password updated successfully</p>";
					}
					if(strpos($url, "error=queryfailed")){ 
						echo "<p>An error occured</p>";
					}
					if(strpos($url, "age=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "age=notnumber")){ 
						echo "<p>Please enter valid age</p>";
					}
					if(strpos($url, "age=invalidlength")){ 
						echo "<p>Enter only 12 to 120</p>";
					}
					if(strpos($url, "age=success")){ 
						echo "<p>Age added successfully</p>";
					}
					if(strpos($url, "contact=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "contact=invalidlength")){ 
						echo "<p>Enter specified length</p>";
					}
					if(strpos($url, "contact=success")){ 
						echo "<p>Contact added successfully</p>";
					}
					if(strpos($url, "job=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "job=invalidlength")){ 
						echo "<p>Enter specified length</p>";
					}
					if(strpos($url, "job=success")){ 
						echo "<p>Job added successfully</p>";
					}
					if(strpos($url, "company=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "company=invalidlength")){ 
						echo "<p>Enter specified length</p>";
					}
					if(strpos($url, "company=success")){ 
						echo "<p>Company added successfully</p>";
					}
					if(strpos($url, "info=noinput")){ 
						echo "<p>You did not input</p>";
					}
					if(strpos($url, "info=invalidlength")){ 
						echo "<p>Enter specified length</p>";
					}
					if(strpos($url, "info=success")){ 
						echo "<p>Information added successfully</p>";
					}
				?>
				<form action="myaccount.php" method="post" style="display: none;">
					<p>Set Age</p>
					<input type="number" name="age" class="input" placeholder="Age here..." max="120" min="12" required><br><br>
					<button class="button-15" role="button" name="setAge" type="submit">Add Age</button><br><br>
				</form>
				<form action="myaccount.php" method="post" style="display: none;">
					<p>Set Contact</p>
					<input type="text" name="contact" class="input" placeholder="Contact here..." maxlength="20" minlength="7" required><br><br>
					<button class="button-15" role="button" name="setContact" type="submit">Add Contact</button><br><br>
				</form>
				<form action="myaccount.php" method="post" style="display: none;">
					<p>Set Job</p>
					<input type="text" name="job" class="input" placeholder="Job here..." maxlength="20" minlength="7" required><br><br>
					<button class="button-15" role="button" name="setJob" type="submit">Add Job</button><br><br>
				</form>
				<form action="myaccount.php" method="post" style="display: none;">
					<p>Set Company</p>
					<input type="text" name="company" class="input" placeholder="Company here..." maxlength="20" minlength="7" required><br><br>
					<button class="button-15" role="button" name="setCompany" type="submit">Add Company</button><br><br>
				</form>
				<form action="myaccount.php" method="post" style="display: none;">
					<p>Set Your Info</p>
					<textarea name="info" placeholder="Your Info here..." maxlength="200" minlength="30" required></textarea><br><br>
					<button class="button-15" role="button" name="setInfo" type="submit">Add Your Info</button><br><br>
				</form>
            </div>
			<?php include 'recommendationaside.php'; ?>
		</div>
		<?php include 'footer.php'; ?>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<script src="displayset.js"></script>
	</body>
</html>

<?php

} 
else {
    header('location:login.php?login=youdidntlogin');
}

?>