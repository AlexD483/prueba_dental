<?php
header('Content-Type: application/json');

$valid_email = "user@example.com";
$valid_password = "password123";

$response = array('success' => false);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $valid_email && $password === $valid_password) {
        $response['success'] = true;
    }
}

echo json_encode($response);
?>
