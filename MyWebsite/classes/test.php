<?php

$conn = mysqli_connect('localhost', 'root', '', 'mwdb');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query2 = "SELECT id FROM users WHERE username = 'BrianSerrano';";
            $query_run2 = mysqli_query($conn, $query2);

            if(!$query_run2) {
                header('location:signup.php?login=queryfailed');
                exit();
            }
            $id = mysqli_fetch_assoc($query_run2);
            $_SESSION["id"] = $id['id'];
echo $_SESSION["id"];

?>