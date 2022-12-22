<?php

class signupfunc extends checkSignup {

    private $user;
    private $email;
    private $pwd;
    private $confPwd;

    public function __construct($user, $email, $pwd, $confPwd){
        $this->user = $user;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->confPwd = $confPwd;
    }
    public function noInput(){
        $result = null;
        if(empty($this->user) || empty($this->email) || empty($this->pwd) || empty($this->confPwd)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function invalidUser(){
        $result = null;
        if(!preg_match("/^[a-zA-Z0-9]{7,20}$/", $this->user)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function pwdValidation(){
        $uppercase = preg_match('@[A-Z]@', $this->pwd);
        $lowercase = preg_match('@[a-z]@', $this->pwd);
        $number = preg_match('@[0-9]@', $this->pwd);
        $specialChars = preg_match('@[^\w]@', $this->pwd);
        $result = null;

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($this->pwd) < 7 || strlen($this->pwd) > 20) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    public function invalidEmail(){
        $result = null;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function pwdMatch(){
        $result = null;
        if($this->pwd !== $this->confPwd){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function takenCheck(){
        $result = null;
        if(!$this->checkUser($this->user, $this->email)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function signupUser(){

        if($this->noInput() == false){
            header('location:signup.php?signup=noinput');
            exit();
        }
        if($this->invalidUser() == false){
            header('location:signup.php?signup=user');
            exit();
        }
        if($this->pwdValidation() == false){
            header('location:signup.php?signup=pwdvalidation');
            exit();
        }
        if($this->invalidEmail() == false){
            header('location:signup.php?signup=email');
            exit();
        }
        if($this->pwdMatch() == false){
            header('location:signup.php?signup=password');
            exit();
        }
        if($this->takenCheck() == false){
            header('location:signup.php?signup=taken');
            exit();
        }
        $this->setUser($this->user, $this->email, $this->pwd);
    }
}

?>