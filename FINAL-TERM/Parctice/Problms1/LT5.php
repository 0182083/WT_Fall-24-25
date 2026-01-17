<?php
header("Content-Type: application/json");

$existingUsers = [
    "admin", "john", "alex", "maria", "sarah",
    "david", "mike", "emma", "linda", "robert"
];

$username = strtolower($_GET['username']);
$isAvailable = !in_array($username, $existingUsers);

$response = [
    "available" => $isAvailable,
    "message" => $isAvailable ? "Username is available" : "Username already taken"
];

echo json_encode($response);
?>
