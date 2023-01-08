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
        return empty($this->user) || empty($this->email) || empty($this->pwd) || empty($this->confPwd);
    }
    public function invalidUser(){
        return !preg_match("/^[a-zA-Z0-9]{7,20}$/", $this->user);
    }
    public function pwdValidation(){
        $uppercase = preg_match('@[A-Z]@', $this->pwd);
        $lowercase = preg_match('@[a-z]@', $this->pwd);
        $number = preg_match('@[0-9]@', $this->pwd);
        $specialChars = preg_match('@[^\w]@', $this->pwd);

        return !$uppercase || !$lowercase || !$number || !$specialChars;
    }
    public function invalidEmail(){
        return !filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }
    public function pwdMatch(){
        return $this->pwd !== $this->confPwd;
    }
    public function takenCheck(){
        return !$this->checkUser($this->user, $this->email);
    }
    public function length(){
        return strlen($this->user) < 7 || strlen($this->user) > 20 || strlen($this->pwd) < 7 || strlen($this->pwd) > 20 || strlen($this->confPwd) < 7 || strlen($this->confPwd) > 20 || strlen($this->email) < 10 || strlen($this->email) > 40;
    }
    public function signupUser(){

        if($this->noInput()){
            header('location:signup.php?signup=noinput');
            exit();
        }
        if($this->invalidUser()){
            header('location:signup.php?signup=user');
            exit();
        }
        if($this->pwdValidation()){
            header('location:signup.php?signup=pwdvalidation');
            exit();
        }
        if($this->invalidEmail()){
            header('location:signup.php?signup=email');
            exit();
        }
        if($this->pwdMatch()){
            header('location:signup.php?signup=password');
            exit();
        }
        if($this->takenCheck()){
            header('location:signup.php?signup=taken');
            exit();
        }
        if($this->length()){
            header('location:signup.php?signup=invalidlength');
            exit();
        }
        $this->setUser($this->user, $this->email, $this->pwd);
    }
}

?>