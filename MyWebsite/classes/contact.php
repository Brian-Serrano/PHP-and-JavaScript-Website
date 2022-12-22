<?php

class contact extends database {

    private $contact;

    public function __construct($contact){
        $this->contact = $contact;
    }
    public function noInput(){
        $result = null;
        if(empty($this->contact)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function setContact(){
        if($this->noInput() == false){
            header('location:myaccount.php?contact=noinput');
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