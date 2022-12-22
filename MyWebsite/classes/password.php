<?php

class password extends database {

    private $ConPwd;
    private $NewPwd;

    public function __construct($ConPwd, $NewPwd){
        $this->ConPwd = $ConPwd;
        $this->NewPwd = $NewPwd;
    }
    public function noInput(){
        $result = null;
        if(empty($this->ConPwd) || empty($this->NewPwd)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function pwdValidation(){
        $uppercase = preg_match('@[A-Z]@', $this->NewPwd);
        $lowercase = preg_match('@[a-z]@', $this->NewPwd);
        $number = preg_match('@[0-9]@', $this->NewPwd);
        $specialChars = preg_match('@[^\w]@', $this->NewPwd);
        $result = null;

        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($this->NewPwd) < 7 || strlen($this->NewPwd) > 20) {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
    public function pwdMatch(){
        $result = null;
        if(!password_verify($this->ConPwd, $_SESSION['pwd'])){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function updatePwd(){

        if($this->noInput() == false){
            header('location:updatepassword.php?update=noinput');
            exit();
        }
        if($this->pwdValidation() == false){
            header('location:updatepassword.php?update=invalidpassword');
            exit();
        }
        if($this->pwdMatch() == false){
            header('location:updatepassword.php?update=passworddoesntmatch');
            exit();
        }
        $this->queryPwd($this->ConPwd, $this->NewPwd);
    }
    public function queryPwd($ConPwd, $NewPwd) {
        $hashPwd = password_hash($NewPwd, PASSWORD_DEFAULT);
        $query = "UPDATE users SET pass = '$hashPwd' WHERE pass = '" . $_SESSION['pwd'] . "';";
        $query_run = mysqli_query($this->connect(), $query);
        if (!$query_run) {
            header('location:updatepassword.php?error=queryfailed');
            exit();
        }

        $this->session();
    }
}

?>