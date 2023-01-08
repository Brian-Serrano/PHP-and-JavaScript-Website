<?php

class contact extends database {

    private $contact;

    public function __construct($contact){
        $this->contact = $contact;
    }
    public function noInput(){
        return empty($this->contact);
    }
    public function length(){
        return strlen($this->contact) < 7 || strlen($this->contact) > 20;
    }
    public function setContact(){
        if($this->noInput()){
            header('location:myaccount.php?contact=noinput');
            exit();
        }
        if($this->length()){
            header('location:myaccount.php?contact=invalidlength');
            exit();
        }
        $this->queryContact($this->contact);
    }
    public function queryContact($contact){
        $query = "UPDATE users SET contact = '$contact' WHERE username = '".$_SESSION['user']."';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:myaccount.php?error=queryfailed');
            exit();
        }

        $this->session();
    }

}

?>