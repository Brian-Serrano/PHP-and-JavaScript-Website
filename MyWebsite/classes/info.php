<?php

class info extends database {

    private $info;

    public function __construct($info){
        $this->info = $info;
    }
    public function noInput(){
        $result = null;
        if(empty($this->info)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function setInfo(){
        if($this->noInput() == false){
            header('location:myaccount.php?info=noinput');
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