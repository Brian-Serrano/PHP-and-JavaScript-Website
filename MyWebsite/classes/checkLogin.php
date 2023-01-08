<?php

class checkLogin extends database {

    public function getUser($user, $pwd){

        $query = "SELECT pass FROM users WHERE username = '$user';";
        $query_run = mysqli_query($this->connect(), $query);

        if(!$query_run) {
            header('location:signup.php?login=queryfailed');
            exit();
        }
        if (mysqli_num_rows($query_run) == 0) {
            header('location:login.php?login=usernotfound');
            exit();
        }
        $hashedPwd = mysqli_fetch_assoc($query_run);
        $checkPwd = password_verify($pwd, $hashedPwd['pass']);

        if (!$checkPwd){
            header('location:login.php?login=wrongpassword');
            exit();
        } else if ($checkPwd){
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
}

?>