<?php
// store_payment.php

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method Not Allowed';
    exit;
}

// Get form data
$bank_name = $_POST['bank_name'] ?? '';
$account_number = $_POST['account_number'] ?? '';
$reference_code = $_POST['reference_code'] ?? '';

// Validate form data
if (empty($bank_name) || empty($account_number) || empty($reference_code)) {
    http_response_code(400);
    echo 'All fields are required.';
    exit;
}

// Create a secure folder if it doesn't exist
$secure_folder = __DIR__ . '/secure_payments';
if (!is_dir($secure_folder)) {
    mkdir($secure_folder, 0700, true);
}

// Store payment details securely
$payment_details = [
    'bank_name' => $bank_name,
    'account_number' => $account_number,
    'reference_code' => $reference_code,
    'timestamp' => date('Y-m-d H:i:s'),
];

$file_path = $secure_folder . '/' . uniqid('payment_', true) . '.json';
file_put_contents($file_path, json_encode($payment_details));

echo 'Payment details stored successfully.';
?>
<?php
// store_payment.php

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method Not Allowed';
    exit;
}

// Get form data
$bank_name = $_POST['bank_name'] ?? '';
$account_number = $_POST['account_number'] ?? '';
$reference_code = $_POST['reference_code'] ?? '';

// Validate form data
if (empty($bank_name) || empty($account_number) || empty($reference_code)) {
    http_response_code(400);
    echo 'All fields are required.';
    exit;
}

// Create a secure folder if it doesn't exist
$secure_folder = __DIR__ . '/secure_payments';
if (!is_dir($secure_folder)) {
    mkdir($secure_folder, 0700, true);
}

// Store payment details securely
$payment_details = [
    'bank_name' => $bank_name,
    'account_number' => $account_number,
    'reference_code' => $reference_code,
    'timestamp' => date('Y-m-d H:i:s'),
    'bic' => 'NAIAGB21',
    'iban' => 'GB45 NAIA 0708 0620 7951 39',
    'swift' => 'MIDLGB22',
    'intermediary_bank' => 'MIDLGB22',
    'sort_code' => '070806',
    'bank_account' => '20795139',
    'account_holder' => 'Ervin Remus Radosavlevici',
    'bank_name_detailed' => 'Nationwide'
];

$file_path = $secure_folder . '/' . uniqid('payment_', true) . '.json';
file_put_contents($file_path, json_encode($payment_details));

echo 'Payment details stored successfully.';
?>
