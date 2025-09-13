<?php
session_start();

// Set the response header to JSON
header('Content-Type: application/json');

// Check if a CSRF token already exists in the session, if not, generate a new one
if (!isset($_SESSION['csrf_token'])) {
    // Generate a secure, random token and encode it using base64 to match the desired output format
    $_SESSION['csrf_token'] = base64_encode(random_bytes(64));
}

// Prepare the response data with the specified name and the generated token
$response = [
    'token' => $_SESSION['csrf_token'],
    'name' => 'CRAFT_CSRF_TOKEN',
];

// Return the JSON response
echo json_encode($response);
