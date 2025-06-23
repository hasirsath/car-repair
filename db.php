<?php
session_start();


define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","car service");


class Database{
    private $con;

    public function connect(){
        $this->con = new Mysqli(HOST,USER,PASS,DB);
        if($this->con){
            return $this->con;
        }
        return "DATABASE_CONNECTION_FAIL";
    }
}
?>