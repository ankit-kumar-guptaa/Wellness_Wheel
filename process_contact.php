<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Validate required fields
    $errors = [];
    if (empty($name)) $errors[] = "Name is required";
    if (empty($email)) $errors[] = "Email is required";
    if (empty($phone)) $errors[] = "Phone number is required";
    if (empty($subject)) $errors[] = "Subject is required";
    if (empty($message)) $errors[] = "Message is required";
    
    // If there are validation errors
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    
    // If validation passes, send email using PHPMailer
    try {
        // Include PHPMailer autoloader
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
        
        // Add reply-to with sender's email
        $mail->addReplyTo($email, $name);
        
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'New Contact Form Message: ' . $subject;
        
        // Email body
        $body = "<h2>New Contact Form Message</h2>"
              . "<p><strong>Name:</strong> $name</p>"
              . "<p><strong>Email:</strong> $email</p>"
              . "<p><strong>Phone:</strong> $phone</p>"
              . "<p><strong>Subject:</strong> $subject</p>"
              . "<p><strong>Message:</strong><br>$message</p>";
        
        $mail->Body = $body;
        $mail->AltBody = strip_tags($body); // Plain text version of the message
        
        // Send email
        $mail->send();
        
        // If email is sent successfully
        echo json_encode(['success' => true, 'message' => 'Thank you for your message! We will get back to you soon.']);
    } catch (Exception $e) {
        // If there's an error sending the email
        echo json_encode(['success' => false, 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"]);
    }
} else {
    // If not a POST request
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}