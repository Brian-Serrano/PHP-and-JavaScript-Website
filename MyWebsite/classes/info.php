<?php

class info extends database {

    private $info;

    public function __construct($info){
        $this->info = $info;
    }
    public function noInput(){
        return empty($this->info);
    }
    public function length(){
        return strlen($this->info) < 30 || strlen($this->info) > 200;
    }
    public function setInfo(){
        if($this->noInput()){
            header('location:myaccount.php?info=noinput');
            exit();
        }
        if($this->length()){
            header('location:myaccount.php?info=invalidlength');
            exit();
        }
        $this->queryInfo($this->info);
    }
    public function queryInfo($info){
        $query = "UPDATE users SET summary = '$info' WHERE username = '".$_SESSION['user']."';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:myaccount.php?error=queryfailed');
            exit();
        }

        $this->session();
    }

}

?>