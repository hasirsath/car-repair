<?php
class User{
    private $con;


    function __construct(){
        include_once("../db.php");
        $db = new Database();
        $this->con = $db->connect();
    }



    private function emailExists($email){
        $pre_stmt = $this->con->prepare("SELECT email FROM users WHERE email = ?");
        $pre_stmt -> bind_param("s",$email);
        $pre_stmt -> execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }



    public function createUserAccount($fname,$lname,$gender,$contact,$addres,$email,$pass){

        if($this->emailExists($email)){
            echo "EMAIL_ALREADY_EXISTS";
        } else {
            if (empty($pass)) {
                return "PASSWORD_REQUIRED";
            }
            $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
            
    
            $pre_stmt = $this->con->prepare("INSERT INTO `users`(`fname`, `lname`, `gender`, `contact`, `addres`, `email`, `pass`) VALUES (?,?,?,?,?,?,?)");
            $pre_stmt->bind_param("sssisss",$fname,$lname,$gender,$contact,$addres,$email,$hashed_password); // Use $hashed_password here
    
            $result = $pre_stmt->execute() or die($this->con->error);
            if ($result){
                return "SUCCESS";
            } else {
                error_log("Registration failed: " . $pre_stmt->error . " SQL: " . $sql); // Include $sql
                return "REGISTRATION_FAILED: " . $pre_stmt->error;
            }
        }
    }
public function userLogin($email, $password) {
    $conn = new mysqli('localhost', 'root', '', 'car service');


        file_put_contents("debug_log.txt", "Checking login for: " . $email . "\n", FILE_APPEND);
        $pre_stmt = $this->con->prepare("SELECT user_id,email, `pass` FROM users WHERE email = ?");
        if (!$pre_stmt) {
            die($this->con->error); // Print the error message if prepare fails
        }
        $pre_stmt->bind_param("s", $email);
        $pre_stmt->execute() or die($this->con->error);
        $result = $pre_stmt->get_result();
    
        if ($result->num_rows < 1) {
            file_put_contents("debug_log.txt", "User not registered\n", FILE_APPEND);
            return "NOT_REGISTERED";
        } else {
            $row = $result->fetch_assoc();
            $stored_hashed_password = $row["pass"]; // Get the stored *hashed* password

            file_put_contents("debug_log.txt", "Stored Password: " . $stored_hashed_password . "\n", FILE_APPEND);
            file_put_contents("debug_log.txt", "Entered Password: " . $password . "\n", FILE_APPEND);

            if (password_verify($password, $stored_hashed_password)) { // Use password_verify()
                
                $_SESSION['user_id'] = $row['user_id']; // Store user_id in session
                file_put_contents("debug_log.txt", "Login successful!\n", FILE_APPEND);
                return "LOGIN_SUCCESS";
            } else {
                file_put_contents("debug_log.txt", "Password did not match\n", FILE_APPEND);
                return "PASSWORD_NOT_MATCHED";
            }
        }
    }
    
    
 public function booking($name,$email,$phone,$servicetype,$Date,$time){
          // Set a default value for booking_status
            $booking_status = 'Pending';

            $pre_stmt = $this->con->prepare("INSERT INTO `booking`( `name`, `email`, `phone`, `servicetype`, `Date`, `time`,`booking_status`) VALUES (?,?,?,?,?,?,?)");
            $pre_stmt->bind_param("ssissis",$name,$email,$phone,$servicetype,$Date,$time,$booking_status);
            $result = $pre_stmt->execute() or die($this->con->error);
            if ($result){
                return "SUCCESS";
            }
            else{
                return "SOME_ERROR";
            }
        }
        
    
     
}


?>
