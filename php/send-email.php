<?php
// Your receiving email
$to = 'zohaibmansoor.ali@gmail.com';

function base_url(): string {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
    return $protocol . "://" . $_SERVER['HTTP_HOST'];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Sanitize input data
    $name = htmlspecialchars(trim($_POST['name'] ?? 'Unknown'));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject'] ?? 'Contact Form Submission'));
    $message_content = htmlspecialchars(trim($_POST['message'] ?? 'No message provided'));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? 'N/A'));
    $company = htmlspecialchars(trim($_POST['company'] ?? 'N/A'));

    // Validate required fields
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("Invalid email address.");
    }
    if (empty($name) || empty($message_content)) {
        exit("Name and message are required fields.");
    }

    // Build the email body (HTML safe)
    $message = "
    <html>
    <body style='font-family: Arial, sans-serif; color: #333;'>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Company:</strong> {$company}</p>
        <hr>
        <p><strong>Message:</strong><br>" . nl2br($message_content) . "</p>
        <br><hr>
        <p style='font-size: 12px; color: #777;'>Sent from: " . base_url() . "</p>
    </body>
    </html>";

    // Set headers properly
    $headers = "From: {$name} <{$email}>\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "OK";
    } else {
        http_response_code(500);
        echo "Error: Message could not be sent. Try again later.";
    }
}
?>
