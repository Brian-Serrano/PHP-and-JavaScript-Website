<?php

session_start();
include "classes/database.php";

$db = new database();
if($_POST['score']>$_SESSION['score']){
	$query = "UPDATE users SET highscore = '".$_POST['score']."' WHERE username = '".$_SESSION['user']."';";
    $query_run = mysqli_query($db->connect(), $query);
    if(!$query_run) {
        header('location:quiz.php?error=queryfailed');
        exit();
    }
}
$db->session();

?>