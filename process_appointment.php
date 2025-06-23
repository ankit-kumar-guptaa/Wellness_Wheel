<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['fullName'] ?? '';
    $phoneNumber = $_POST['phoneNumber'] ?? '';
    $email = $_POST['email'] ?? '';
    $testType = $_POST['testType'] ?? '';
    $preferredDate = $_POST['preferredDate'] ?? '';
    $preferredTime = $_POST['preferredTime'] ?? '';
    $specialInstructions = $_POST['specialInstructions'] ?? '';
    
    // Validate required fields
    $errors = [];
    if (empty($fullName)) $errors[] = "Full name is required";
    if (empty($phoneNumber)) $errors[] = "Phone number is required";
    if (empty($testType)) $errors[] = "Test type is required";
    if (empty($preferredDate)) $errors[] = "Preferred date is required";
    if (empty($preferredTime)) $errors[] = "Preferred time is required";
    
    // If there are validation errors
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    
    // If validation passes, send email using PHPMailer
    try {
        // Include PHPMailer autoloader
        // Note: You need to install PHPMailer using Composer first
        // Run: composer require phpmailer/phpmailer
        require 'vendor/autoload.php';
        
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);
        
        // Server settings
        $mail->isSMTP();                                      // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';             // SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'info@wellnesswheels.in';         // SMTP username
        $mail->Password   = 'Sudhanshu20@';                   // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // Enable TLS encryption
        $mail->Port       = 587;                              // TCP port to connect to
        
        // Recipients
        $mail->setFrom('info@wellnesswheels.in', 'WellnessWheel');
        $mail->addAddress('info@wellnesswheels.in');          // Add a recipient
        
        // Add reply-to if email is provided
        if (!empty($email)) {
            $mail->addReplyTo($email, $fullName);
        }
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Appointment Request from ' . $fullName;
        
        // Email body
        $body = "<h2>New Appointment Request</h2>"
              . "<p><strong>Name:</strong> $fullName</p>"
              . "<p><strong>Phone:</strong> $phoneNumber</p>";
        
        if (!empty($email)) {
            $body .= "<p><strong>Email:</strong> $email</p>";
        }
        
        $body .= "<p><strong>Test Type:</strong> $testType</p>"
              . "<p><strong>Preferred Date:</strong> $preferredDate</p>"
              . "<p><strong>Preferred Time:</strong> $preferredTime</p>";
        
        if (!empty($specialInstructions)) {
            $body .= "<p><strong>Special Instructions:</strong> $specialInstructions</p>";
        }
        
        $mail->Body = $body;
        $mail->AltBody = strip_tags($body); // Plain text version of the message
        
        // Send email
        $mail->send();
        
        // If email is sent successfully
        echo json_encode(['success' => true, 'message' => 'Appointment booked successfully! You will receive a confirmation soon.']);
    } catch (Exception $e) {
        // If there's an error sending the email
        echo json_encode(['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    // If not a POST request
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}