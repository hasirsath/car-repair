<?php
session_start();

// $servername = "localhost";
// $username = "username";
// $password = "password";
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","car service");
// if($conn->connect_error){
//     echo "errorr!!";
// }
// else{
//     echo "Success";
// }


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