<div class="header" id="myHeader">
	<p>PHP and JS</p>
	<a href="javascript:void(0);" class="icon" onclick="Header()">
		<i class="fa fa-bars"></i>
	</a>
	<div class="subHeader">
		<a href="index.php">Home</a>
		<a href="myaccount.php">Account</a>
		<?php
		if (isset($_SESSION["id"])){
			echo "<a href='logout.php'>LogOut</a>";
		} else {
			echo "<a href='login.php'>LogIn</a>";
		}
		?>
		<a href='about.php'>About</a>
	</div>
</div>
<div class="nav" id="myNav">
	<p>My Calculator</p>
	<a href="javascript:void(0);" class="icon" onclick="Nav()">
		<i class="fa fa-bars"></i>
	</a>
	<div class="subNav">
		<a href="math.php">Math</a>
		<a href="encryption.php">Encryption</a>
		<a href="improve.php">Improve</a>
		<a href="quiz.php">Quiz</a>
	</div>
</div>