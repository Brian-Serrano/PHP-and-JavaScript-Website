<?php

class company extends database {

    private $company;

    public function __construct($company){
        $this->company = $company;
    }
    public function noInput(){
        $result = null;
        if(empty($this->company)){
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
    public function setCompany(){
        if($this->noInput() == false){
            header('location:myaccount.php?company=noinput');
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