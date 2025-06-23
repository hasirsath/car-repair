<?php
session_start();
require_once 'db.php'; // Ensure the DB connection file is included

// Initialize variables to avoid "undefined variable" errors
$userName = "Guest";
$userEmail = "user@example.com";
$userPicture = "default-profile.jpg";

// If user logged in via Google
if (isset($_SESSION['user'])) {
    $userName = $_SESSION['user']['name'] ?? "Guest";
    $userEmail = $_SESSION['user']['email'] ?? "user@example.com";
    $userPicture = $_SESSION['user']['picture'] ?? "default-profile.jpg";
} 
// If user is logged in via database session
elseif (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $stmt = $conn->prepare("SELECT fname, email, FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($user = $result->fetch_assoc()) {
        $userName = $user['name'] ?? "Guest";
        $userEmail = $user['email'] ?? "user@example.com";
        $userPicture = $user['profile_picture'] ?? "default-profile.jpg";
    }
}
?>




