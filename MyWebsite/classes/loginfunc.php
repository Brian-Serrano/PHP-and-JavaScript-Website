<?php

class loginfunc extends checkLogin {

    private $user;
    private $pwd;

    public function __construct($user, $pwd){
        $this->user = $user;
        $this->pwd = $pwd;
    }
    public function noInput(){
        $result = null;
        if(empty($this->user) || empty($this->pwd)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function loginUser(){

        if($this->noInput() == false){
            header('location:login.php?login=noinput');
            exit();
        }
        $this->getUser($this->user, $this->pwd);
    }
}

?>