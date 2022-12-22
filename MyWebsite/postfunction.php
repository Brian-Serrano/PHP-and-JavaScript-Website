<?php
                    
include "classes/database.php";
include "classes/dbfetch.php";

$fetch = new dbfetch();

if (mysqli_num_rows($fetch->fetchpost()) > 0){
	foreach($fetch->fetchpost() as $row){
         
        if(isset($_POST["view".$row["id"].""])){

            $query = "SELECT * FROM posts WHERE id = '".$row["id"]."';";
            $query_run = mysqli_query($fetch->connect(), $query);
            if(!$query_run) {
                header("location:".$_SERVER['PHP_SELF']."?error=queryfailed");
                exit();
            }
            $info = mysqli_fetch_assoc($query_run);
            $_SESSION["title"] = $info["title"];
            $_SESSION["descr"] = $info["descr"];
            $_SESSION["input"] = $info["input"];
            $_SESSION["output"] = $info["output"];
            $_SESSION["expl"] = $info["expl"];
            $_SESSION["date"] = $info["date"];
            $_SESSION["author"] = $info["username"];
            ?> <script>window.location.href = "postinfo.php";</script> <?php
        }
		$out = strlen($row["descr"]) > 100 ? substr($row["descr"],0,100)."..." : $row["descr"];
		echo "<div class='cardview'>
			<form action='posts.php' method='post'>
				<p>" . $row["title"] . "</p>
				<input type='hidden' name='" . $row["id"] . "' value='" . $row["id"] . "'>
				<button type='submit' name='view".$row["id"]."' class='button-15' role='button'>View</button>
			</form><hr>
            <p>".$out."</p><hr>
            <div class='inline'>
                <p>".$row["username"]."</p>
                <p>".$row["date"]."</p>
            </div>
        </div>";
	}
} else {
	echo "0 results";
}
                    
?>