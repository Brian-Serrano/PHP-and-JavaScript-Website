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