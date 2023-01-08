<?php

class loginfunc extends checkLogin {

    private $user;
    private $pwd;

    public function __construct($user, $pwd){
        $this->user = $user;
        $this->pwd = $pwd;
    }
    public function noInput(){
        return empty($this->user) || empty($this->pwd);
    }
    public function length(){
        return strlen($this->pwd) < 7 || strlen($this->pwd) > 20 || strlen($this->user) < 7 || strlen($this->user) > 20;
    }
    public function loginUser(){

        if($this->noInput()){
            header('location:login.php?login=noinput');
            exit();
        }
        if($this->length()){
            header('location:login.php?login=invalidlength');
            exit();
        }
        $this->getUser($this->user, $this->pwd);
    }
}

?>