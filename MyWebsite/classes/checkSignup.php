<?php

class checkSignup extends database {

    public function checkUser($user, $email){
        
        $query = "SELECT username FROM users WHERE username = '$user' OR email = '$email';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:signup.php?signup=queryfailed');
            exit();
        }
        $resultCheck = mysqli_num_rows($query_run) > 0;
        return !$resultCheck;
    }
    public function setUser($user, $email, $pwd){
        $hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, email, pass) VALUES ('$user', '$email', '$hashPwd');";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:signup.php?signup=queryfailed');
            exit();
        }
        session_start();
        $query2 = "SELECT id FROM users WHERE username = '$user';";
        $query_run2 = mysqli_query($this->connect(), $query2);

        if(!$query_run2) {
            header('location:signup.php?login=queryfailed');
            exit();
        }
        $id = mysqli_fetch_assoc($query_run2);
        $_SESSION["id"] = $id['id'];
        $this->session();
    }
}

?>