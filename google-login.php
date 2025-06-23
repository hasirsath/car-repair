<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON input from fetch
    $data = json_decode(file_get_contents('php://input'), true);

    if ($data && isset($data['name'], $data['email'], $data['picture'])) {
        $_SESSION['user'] = [
            'name' => $data['name'],
            'email' => $data['email'],
            'picture' => $data['picture']
        ];

        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
