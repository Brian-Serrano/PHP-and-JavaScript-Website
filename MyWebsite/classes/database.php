<?php

class database {
    
    public function connect(){
        $conn = mysqli_connect('localhost', 'root', '', 'mwdb');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
    public function session(){
        
        $query = "SELECT * FROM users WHERE id = '".$_SESSION['id']."';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header("location:".$_SERVER['PHP_SELF']."?error=queryfailed");
            exit();
        }
        $user = mysqli_fetch_assoc($query_run);
        
        $_SESSION["id"] = $user["id"];
        $_SESSION["user"] = $user["username"];
        $_SESSION["pwd"] = $user["pass"];
        $_SESSION["email"] = $user["email"];
        $_SESSION["age"] = $user["age"];
        $_SESSION["contact"] = $user["contact"];
        $_SESSION["job"] = $user["job"];
        $_SESSION["company"] = $user["company"];
        $_SESSION["summary"] = $user["summary"];
        $_SESSION["score"] = $user["highscore"];
    }
}