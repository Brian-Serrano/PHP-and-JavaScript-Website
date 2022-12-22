<?php

session_start();
include "classes/database.php";

class delete extends database {

    public function deleteaccount(){
        $query = "DELETE FROM users WHERE id = '".$_SESSION['id']."';";
        if (mysqli_query($this->connect(), $query)) {
            header('location:login.php');
        } else {
            header('location:myaccount.php?error=deletingaccount');
        }
    }
}

$del = new delete();
$del->deleteaccount();
session_unset();
session_destroy();

?>