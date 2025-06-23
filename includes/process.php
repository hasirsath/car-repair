<?php
include("../db.php");
include_once("../includes/dboperation.php");



if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["service"]) && isset($_POST["date"]) && isset($_POST["time"])) {
    $user = new User();
    $result = $user->booking($_POST["name"], $_POST["email"], $_POST["phone"], $_POST["service"], $_POST["date"], $_POST["time"]);
    echo $result;
}
?>
