
<?php
include("../db.php");
include_once("../includes/dboperation.php");




if (isset($_POST["fname"]) && isset($_POST["lname"]) && isset($_POST["gender"]) && isset($_POST["contact"]) && isset($_POST["addres"]) && isset($_POST["email"]) && isset($_POST["pass"])) {
    $user = new User();
    $result = $user->createUserAccount($_POST["fname"], $_POST["lname"], $_POST["gender"], $_POST["contact"], $_POST["addres"], $_POST["email"], $_POST["pass"]);
    echo $result;
}


// login 
error_reporting(E_ALL);
ini_set('display_errors', 1);
file_put_contents("debug_log.txt", "Login request received\n", FILE_APPEND);
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lemail"]) && isset($_POST["lpassword"])) {
    $user = new User();
    $result = $user->userLogin($_POST["lemail"], $_POST["lpassword"]);
    if ($result === "LOGIN_SUCCESS") { // Use strict equality (===)
        echo "LOGIN_SUCCESS";
    } else if ($result === "NOT_REGISTERED") {
        echo "NOT_REGISTERED"; // Or perhaps a more generic "LOGIN_FAIL"
    } else if ($result === "PASSWORD_NOT_MATCHED") {
        echo "PASSWORD_NOT_MATCHED"; // Or "LOGIN_FAIL"
    } else {
        echo "LOGIN_FAIL"; // Catch any other error conditions
        // Log the error for debugging (highly recommended)
        error_log("Login error: " . $result);
    }
    exit();
}


?>