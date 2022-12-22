<?php

class username extends database {

    private $ConUser;
    private $NewUser;

    public function __construct($ConUser, $NewUser){
        $this->ConUser = $ConUser;
        $this->NewUser = $NewUser;
    }
    public function noInput(){
        $result = null;
        if(empty($this->ConUser) || empty($this->NewUser)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function invalidUser(){
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]{7,20}$/", $this->NewUser)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function userMatch(){
        $result = null;
        if($this->ConUser != $_SESSION['user']){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function updateUser(){

        if($this->noInput() == false){
            header('location:updateusername.php?update=noinput');
            exit();
        }
        if($this->invalidUser() == false){
            header('location:updateusername.php?update=invaliduser');
            exit();
        }
        if($this->userMatch() == false){
            header('location:updateusername.php?update=usernamedoesntmatch');
            exit();
        }
        $this->queryUser($this->ConUser, $this->NewUser);
    }
    public function queryUser($ConUser, $NewUser) {
        $query = "UPDATE users SET username = '$NewUser' WHERE username = '" . $_SESSION['user'] . "';";
        $query_run = mysqli_query($this->connect(), $query);
        if (!$query_run) {
            header('location:updateusername.php?error=queryfailed');
            exit();
        }

        $this->session();
    }
}

?>