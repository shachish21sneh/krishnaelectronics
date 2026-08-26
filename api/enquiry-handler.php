<?php
/**
 * Krishna Electronics - Enquiry & Quote Submission API Handler
 * Handles form submissions, saves records to backup storage, and sends instant SMTP notifications.
 */

if (!headers_sent()) {
    header('Content-Type: application/json; charset=utf-8');
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method Not Allowed. Please submit the form via POST.'
    ]);
    exit;
}

// Require Configuration and Mailer Service
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/mailer.php';

// Sanitize and extract input fields
$name = isset($_POST['name']) ? trim(filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$mobile = isset($_POST['mobile']) ? trim(filter_var($_POST['mobile'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$email = isset($_POST['email']) ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';
$city = isset($_POST['city']) ? trim(filter_var($_POST['city'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$product = isset($_POST['product']) ? trim(filter_var($_POST['product'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$quantity = isset($_POST['quantity']) ? trim(filter_var($_POST['quantity'], FILTER_SANITIZE_SPECIAL_CHARS)) : '1';
$message = isset($_POST['message']) ? trim(filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$form_type = isset($_POST['form_type']) ? trim(filter_var($_POST['form_type'], FILTER_SANITIZE_SPECIAL_CHARS)) : 'Customer Enquiry';
$firm_name = isset($_POST['firm_name']) ? trim(filter_var($_POST['firm_name'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';
$business_type = isset($_POST['business_type']) ? trim(filter_var($_POST['business_type'], FILTER_SANITIZE_SPECIAL_CHARS)) : '';

// Validation
$errors = [];
if (empty($name)) {
    $errors[] = 'Full Name is required.';
}
if (empty($mobile)) {
    $errors[] = 'Mobile Number is required.';
} elseif (!preg_match('/^[0-9+\s\-()]{7,20}$/', $mobile)) {
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

// Generate Unique Reference ID
$refId = 'KE-' . date('Ymd') . '-' . strtoupper(substr(uniqid(), -4));

// Record Enquiry Data
$enquiryEntry = [
    'id' => $refId,
    'timestamp' => date('Y-m-d H:i:s'),
    'form_type' => $form_type,
    'name' => $name,
    'mobile' => $mobile,
    'email' => $email ?: 'N/A',
    'city' => $city ?: 'N/A',
    'product' => $product ?: 'General Enquiry / Quote',
    'quantity' => $quantity ?: '1',
    'firm_name' => $firm_name,
    'business_type' => $business_type,
    'message' => $message ?: 'No additional notes provided.',
    'ip' => $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'
];

// Persistent Backup Storage
$dataDir = __DIR__ . '/../data';
if (!is_dir($dataDir)) {
    @mkdir($dataDir, 0755, true);
}

$dataFile = $dataDir . '/enquiries.json';
$existingData = [];

if (file_exists($dataFile)) {
    $jsonContent = @file_get_contents($dataFile);
    $decoded = json_decode($jsonContent, true);
    if (is_array($decoded)) {
        $existingData = $decoded;
    }
}

// Append new entry at the top
array_unshift($existingData, $enquiryEntry);

// Save safely
@file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));

// Send instant email notification via SMTP to krishelegzp@gmail.com
$mailResult = KrishnaMailer::sendEnquiryNotification($enquiryEntry);

// Return success response
echo json_encode([
    'status' => 'success',
    'message' => 'Thank you, ' . htmlspecialchars($name) . '! Your enquiry has been received. Our Krishna Electronics representative will get in touch with you shortly.',
    'reference_id' => $enquiryEntry['id'],
    'mail_dispatched' => $mailResult['success'] ?? false
]);
