<?php

class age extends database {

    private $age;

    public function __construct($age){
        $this->age = $age;
    }
    public function noInput(){
        $result = null;
        if(empty($this->age)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function isNumber(){
        $result = null;
        if(!filter_var($this->age, FILTER_VALIDATE_INT)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function setAge(){
        if($this->noInput() == false){
            header('location:myaccount.php?age=noinput');
            exit();
        }
        if($this->isNumber() == false){
            header('location:myaccount.php?age=notnumber');
            exit();
        }
        $this->queryAge($this->age);
    }
    public function queryAge($age){
        $query = "UPDATE users SET age = '$age' WHERE username = '".$_SESSION['user']."';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:myaccount.php?error=queryfailed');
            exit();
        }

        $this->session();
    }

}

?>