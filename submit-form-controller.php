<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone_number = trim($_POST['phone_number'] ?? '');
    $message = trim($_POST['message'] ?? '');
    if (empty($name)) {
        $errors['name'] = 'Name is required.';
    } elseif (strlen($name) < 3) {
        $errors['name'] = 'Name must be at least 3 characters long.';
    }

    if (empty($email)) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Enter a valid email address.';
    }
    if (empty($phone_number)) {
        $errors['phone_number'] = 'Phone number is required.';
    } elseif (!preg_match('/^[0-9]{10}$/', $phone_number)) {
        $errors['phone_number'] = 'Enter a valid 10-digit phone number.';
    }
    // if (empty($message)) {
    //     $errors['message'] = 'Message is required.';
    // } elseif (strlen($message) < 10) {
    //     $errors['message'] = 'Message must be at least 10 characters long.';
    // }

    if (!empty($errors)) {
        echo json_encode(['status' => 'error', 'errors' => $errors]);
        exit;
    }
    $to = "rahulkumarmaurya464@gmail.com"; 
    $subject = "New Enquiry from From Palash Kothi Website" . $name;
    $body = "Name: $name\nEmail: $email\nPhone: $phone_number\nMessage:\n$message";
    $headers = "From: palashlothi.com\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['status' => 'success', 'message' => 'Your message has been sent successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to send message. Please try again later.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
