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
				<h1>Improve My Website</h1><hr>
                <form action="improve.php" method="post">
                    <p>Calculator you want me to add</p>
                    <input type = "text" name = "title" class = "input" placeholder="Title here..." maxlength="40" minlength="7" required><br><br>
                    <p>Short description about the calculator</p>
                    <textarea name="desc" class="form-control" rows="5" placeholder="Description here..." maxlength="200" minlength="50" required></textarea><br><br>
                    <p>Sample Input</p>
                    <input type = "text" name = "sinput" class = "input" placeholder="Sample Input here..." maxlength="20" minlength="7" required><br><br>
                    <p>Sample Output</p>
                    <input type = "text" name = "soutput" class = "input" placeholder="Sample Output here..." maxlength="20" minlength="7" required><br><br>
                    <p>Explanation for the sample</p>
                    <textarea name="expl" class="form-control" rows="5" placeholder="Explanation here..." maxlength="200" minlength="50" required></textarea><br><br>
                    <button name="save" class="button-15" role="button">Submit</button><br><br>
                </form>
                <?php
                
                if(isset($_POST["save"])){

                    if(empty($_POST["title"]) || empty($_POST["desc"]) || empty($_POST["sinput"]) || empty($_POST["soutput"]) || empty($_POST["expl"])){
                        echo "Please fill in required fields";
                        exit();
                    }
                    if(strlen($_POST["title"]) < 7 || strlen($_POST["title"]) > 40 || strlen($_POST["desc"]) < 50 || strlen($_POST["desc"]) > 200 || strlen($_POST["sinput"]) < 7 || strlen($_POST["sinput"]) > 20 || strlen($_POST["soutput"]) < 7 || strlen($_POST["soutput"]) > 20 || strlen($_POST["expl"]) < 50 || strlen($_POST["expl"]) > 200){
                        echo "Please enter specified length";
                        exit();
                    }

                    include "classes/database.php";

                    $date = date('Y-m-d H:i:s');
                    $db = new database();
                    $query = "INSERT INTO posts (username, date, title, descr, input, output, expl) VALUES (
                        '".$_SESSION["user"]."',
                        '$date',
                        '".$_POST["title"]."',
                        '".$_POST["desc"]."',
                        '".$_POST["sinput"]."',
                        '".$_POST["soutput"]."',
                        '".$_POST["expl"]."'
                        );";
        			$query_run = mysqli_query($db->connect(), $query);
        			if(!$query_run) {
            			header('location:improve.php?error=queryfailed');
            			exit();
        			}
                    echo "<p>Post added successfully</p>";
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