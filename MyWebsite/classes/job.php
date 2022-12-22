<?php

class job extends database {

    private $job;

    public function __construct($job){
        $this->job = $job;
    }
    public function noInput(){
        $result = null;
        if(empty($this->job)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function setJob(){
        if($this->noInput() == false){
            header('location:myaccount.php?job=noinput');
            exit();
        }
        $this->queryJob($this->job);
    }
    public function queryJob($job){
        $query = "UPDATE users SET job = '$job' WHERE username = '".$_SESSION['user']."';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:myaccount.php?error=queryfailed');
            exit();
        }

        $this->session();
    }

}

?>