<?php

class company extends database {

    private $company;

    public function __construct($company){
        $this->company = $company;
    }
    public function noInput(){
        return empty($this->company);
    }
    public function length(){
        return strlen($this->company) < 7 || strlen($this->company) > 20;
    }
    public function setCompany(){
        if($this->noInput()){
            header('location:myaccount.php?company=noinput');
            exit();
        }
        if($this->length()){
            header('location:myaccount.php?company=invalidlength');
            exit();
        }
        $this->queryCompany($this->company);
    }
    public function queryCompany($company){
        $query = "UPDATE users SET company = '$company' WHERE username = '".$_SESSION['user']."';";
        $query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header('location:myaccount.php?error=queryfailed');
            exit();
        }

        $this->session();
    }

}

?>