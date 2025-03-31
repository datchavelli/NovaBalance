<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure Composer autoload is included

$mail = new PHPMailer(true); // Enable exceptions

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host       = 'mail.novabalance.rs'; // Your SMTP server (from cPanel)
    $mail->SMTPAuth   = true;
    $mail->Username   = 'dev@novabalance.rs'; // Your email address
    $mail->Password   = 'SJ]lFd,!bkp*'; // Your email password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use 'tls' for port 587
    $mail->Port       = 465; // Use 587 for TLS

    // Email Headers
    $mail->setFrom('dev@novabalance.rs', 'Test');
    $mail->addAddress('dev@novabalance.rs', 'Recipient Name'); 

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'PHPMailer Test';
    $mail->Body    = '<h1>This is a test email from PHPMailer</h1>';
    $mail->AltBody = 'This is a test email from PHPMailer (plain text)';

    // Send Email
    if ($mail->send()) {
        echo '✅ Test email sent successfully!';
    }
} catch (Exception $e) {
    echo "❌ Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

