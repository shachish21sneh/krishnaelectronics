<?php
/**
 * Automated Verification Script for all forms in Krishna Electronics
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/mailer.php';

echo "=== KRISHNA ELECTRONICS FORM & SMTP TEST SUITE ===\n";
echo "Active Notification Recipient: " . NOTIFICATION_RECIPIENT_EMAIL . "\n";
echo "SMTP Host: " . SMTP_HOST . ":" . SMTP_PORT . " (" . SMTP_SECURE . ")\n";
echo "SMTP User: " . SMTP_USER . "\n\n";

$testForms = [
    [
        'form_name' => '1. Homepage Enquiry Form (index.php)',
        'post_data' => [
            'form_type' => 'Homepage Enquiry Form',
            'name' => 'Amit Sharma',
            'mobile' => '+91 98765 43210',
            'email' => 'amit.sharma@example.com',
            'city' => 'Ghazipur City',
            'product' => '55-inch 4K Smart LED TV',
            'quantity' => '2 Units',
            'message' => 'Need 4K smart TV with wall mount installation and manufacturer warranty.'
        ]
    ],
    [
        'form_name' => '2. Contact Page Customer Enquiry Form (contact.php)',
        'post_data' => [
            'form_type' => 'Contact Page Enquiry Form',
            'name' => 'Rajesh Verma',
            'mobile' => '+91 94152 39944',
            'email' => 'rajesh.verma@example.com',
            'city' => 'Zamania, Ghazipur',
            'product' => 'Pure Sine Wave Inverter 1500VA + 220Ah Tubular Battery',
            'quantity' => '1 Combo Set',
            'message' => 'Looking for complete home backup setup with fast charging and trolley.'
        ]
    ],
    [
        'form_name' => '3. Dealership / Partner Application Form (dealers.php)',
        'post_data' => [
            'form_type' => 'Dealer / Partner Onboarding Application',
            'name' => 'Sanjay Gupta',
            'firm_name' => 'Gupta Electricals & Hardware Store',
            'mobile' => '+91 99112 23344',
            'email' => 'gupta.electricals@example.com',
            'city' => 'Saidpur, Ghazipur, UP',
            'business_type' => 'Retailer / Shop Owner',
            'product' => 'FRLS Copper Wires, MCBs & Inverters',
            'quantity' => '₹1.5 Lakhs Monthly Volume',
            'message' => 'Interested in becoming an authorized regional sub-dealer for Krishna Electronics.'
        ]
    ],
    [
        'form_name' => '4. Universal Quick Quote & Product Inquiry Modal (includes/enquiry-modal.php)',
        'post_data' => [
            'form_type' => 'Modal Quotation Request',
            'name' => 'Pooja Singh',
            'mobile' => '+91 98223 34455',
            'email' => 'pooja.singh@example.com',
            'city' => 'Mohammadabad, Ghazipur',
            'product' => 'LiFePO4 Lithium Battery Solution 100Ah',
            'quantity' => '1 Unit',
            'message' => 'Requesting price quote and warranty details for wall-mounted lithium battery.'
        ]
    ]
];

$allPassed = true;

foreach ($testForms as $test) {
    echo "------------------------------------------------------------\n";
    echo "TESTING: " . $test['form_name'] . "\n";
    echo "------------------------------------------------------------\n";
    
    $_POST = $test['post_data'];
    $_SERVER['REQUEST_METHOD'] = 'POST';
    $_SERVER['REMOTE_ADDR'] = '127.0.0.1';
    
    // Capture output of enquiry-handler.php
    ob_start();
    include __DIR__ . '/api/enquiry-handler.php';
    $rawResponse = ob_get_clean();
    
    $response = json_decode($rawResponse, true);
    
    if (!$response || !isset($response['status'])) {
        echo "[FAIL] Invalid JSON response: {$rawResponse}\n";
        $allPassed = false;
        continue;
    }
    
    if ($response['status'] === 'success') {
        echo "[PASS] Status: SUCCESS\n";
        echo "  - Reference ID: " . ($response['reference_id'] ?? 'N/A') . "\n";
        echo "  - Mail Dispatched: " . ($response['mail_dispatched'] ? 'TRUE (Sent via SMTP)' : 'FALSE') . "\n";
        echo "  - Response Message: " . $response['message'] . "\n";
        
        if (!$response['mail_dispatched']) {
            $allPassed = false;
            echo "[WARNING] Mail was not flagged as dispatched.\n";
        }
    } else {
        echo "[FAIL] Status: " . $response['status'] . " - " . ($response['message'] ?? '') . "\n";
        $allPassed = false;
    }
    echo "\n";
}

echo "============================================================\n";
if ($allPassed) {
    echo ">>> ALL 4 FORMS PASSED & SMTP NOTIFICATIONS DISPATCHED TO " . NOTIFICATION_RECIPIENT_EMAIL . " <<<\n";
} else {
    echo ">>> SOME FORM TESTS FAILED! <<<\n";
}
echo "============================================================\n";
