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
			<div class="article">
				<h1>About my Website</h1><hr>
				<p>Welcome to our interactive and educational platform! Our website offers a variety of features to enhance your learning and problem-solving skills. Take a quiz to test your knowledge and improve your retention of important concepts. Use our encryption tools to learn about different methods of encoding and decoding messages. Take advantage of our math calculators to solve complex problems and understand mathematical concepts more deeply.</p>
				<p>If you want to keep track of your progress and save your work, you can create an account by signing up. With an account, you can also update your credentials and delete your account at any time. Don't worry, logging in and out is easy and secure.</p>
				<p>Explore all that our website has to offer and have fun learning!</p>
				<hr>
				<div id="info-scroll">
                <h1>My Database</h1>
				<?php

				include "classes/database.php";
				include "classes/dbfetch.php";

                $fetch = new dbfetch();

				if (mysqli_num_rows($fetch->fetchmydb()) > 0){
					echo "<table id='info'>
						<tr>
							<th>ID</th>
							<th>Username</th>
							<th>Age</th>
							<th>Contact</th>
							<th>Job</th>
							<th>Company</th>
							<th>Highscore</th>
						</tr>";
					foreach($fetch->fetchmydb() as $row){
		                echo "<tr>
							<td>" . $row['id'] . "</td>
							<td>" . $row['username'] . "</td>
							<td>" . $row['age'] . "</td>
							<td>" . $row['contact'] . "</td>
							<td>" . $row['job'] . "</td>
							<td>" . $row['company'] . "</td>
							<td>" . $row['highscore'] . "</td>
						</tr>";
					}
					echo "</table>";
				} else {
	                echo "0 results";
				}
				
				?>
				<br><br>
				</div>
            </div>
		</div>
		<?php include 'footer.php'; ?>
		<script type="text/javascript" src="script.js"></script>
	</body>
</html>