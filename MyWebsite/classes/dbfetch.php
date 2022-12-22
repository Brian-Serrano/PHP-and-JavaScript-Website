<?php

class dbfetch extends database {
    
    public function fetchmydb(){
        
		$query = "SELECT id, username, age, contact, job, company, highscore FROM users;";
		$query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header("location:".$_SERVER['PHP_SELF']."?error=queryfailed");
            exit();
        }
        return $query_run;
    }
    public function fetchpost(){
        
		$query = "SELECT id, title, descr, username, date FROM posts ORDER BY date DESC;";
		$query_run = mysqli_query($this->connect(), $query);
        if(!$query_run) {
            header("location:".$_SERVER['PHP_SELF']."?error=queryfailed");
            exit();
        }
        return $query_run;
    }
}

?>