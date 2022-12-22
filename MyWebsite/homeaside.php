<div class="aside">
	<p>Navigation</p>
	<ul>
		<li><a href="math.php">Math</a></li>
		<li><a href="encryption.php">Encryption</a></li>
		<li><a href="improve.php">Improve</a></li>
		<li><a href="quiz.php">Quiz</a></li>
		<li><a href="myaccount.php">Account</a></li>
        <?php
	    if (isset($_SESSION["id"])){
		    echo "<li><a href='logout.php'>Log-Out</a></li>";
	    } else {
		    echo "<li><a href='login.php'>Log-In</a></li>";
	    }
	    ?>
        <li><a href="about.php">About</a></li>
	</ul>
</div>