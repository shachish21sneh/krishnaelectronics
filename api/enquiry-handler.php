<?php
/**
 * Krishna Electronics - Enquiry & Quote Submission API Handler
 */

header('Content-Type: application/json; charset=utf-8');

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method Not Allowed. Please submit the form via POST.'
    ]);
    exit;
}

// Sanitize and extract input fields
$name = isset($_POST['name']) ? trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$mobile = isset($_POST['mobile']) ? trim(filter_var($_POST['mobile'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$city = isset($_POST['city']) ? trim(filter_var($_POST['city'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$product = isset($_POST['product']) ? trim(filter_var($_POST['product'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$quantity = isset($_POST['quantity']) ? trim(filter_var($_POST['quantity'], FILTER_SANITIZE_SPECIAL_CHARS)) : '1';
$message = isset($_POST['message']) ? trim(filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$form_type = isset($_POST['form_type']) ? trim(filter_var($_POST['form_type'], FILTER_SANITIZE_SPECIAL_CHARS)) : 'Customer Enquiry';

// Validation
$errors = [];
if (empty($name)) {
    $errors[] = 'Full Name is required.';
}
if (empty($mobile)) {
    $errors[] = 'Mobile Number is required.';
} elseif (!preg_match('/^[0-9+\s\-]{7,15}$/', $mobile)) {
    $errors[] = 'Please provide a valid contact number.';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'status' => 'error',
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// Record Enquiry Data
$enquiryEntry = [
    'id' => 'ENQ-' . strtoupper(uniqid()),
    'timestamp' => date('Y-m-d H:i:s'),
    'form_type' => $form_type,
    'name' => $name,
    'mobile' => $mobile,
    'email' => $email ?: 'N/A',
    'city' => $city ?: 'N/A',
    'product' => $product ?: 'General Enquiry',
    'quantity' => $quantity ?: '1',
    'message' => $message ?: 'No additional notes provided.',
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

$dataFile = __DIR__ . '/../data/enquiries.json';
$existingData = [];

if (file_exists($dataFile)) {
    $jsonContent = file_get_contents($dataFile);
    $decoded = json_decode($jsonContent, true);
    if (is_array($decoded)) {
        $existingData = $decoded;
    }
}

// Append new entry
array_unshift($existingData, $enquiryEntry);

// Save safely
@file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

// Return success response
echo json_encode([
    'status' => 'success',
    'message' => 'Thank you, ' . htmlspecialchars($name) . '! Your enquiry has been received. Our Krishna Electronics representative will get in touch with you shortly.',
    'reference_id' => $enquiryEntry['id']
]);
