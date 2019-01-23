<?php

//Company mail settings

use PHPMailer\PHPMailer\PHPMailer;                          // Path to the PHPMailer class
use PHPMailer\PHPMailer\Exception;                          // Path to the Exception class
try {
//Server settings
$mail_recipient = new PHPMailer(true);            // Create an new PHPMailer request
$mail_recipient->isSMTP();                                  // Set mailer to use SMTP
$mail_recipient->SMTPAuth   = true;                         // Enable SMTP authentication
$mail_recipient->Port       = 587;                          // TCP port to connect to mail
$mail_recipient->SMTPDebug  = 0;                            // 0 = No output / 1 = errors + msg / 2 = msg
$mail_recipient->Host       = $host;                        // Specify main and backup SMTP servers
$mail_recipient->Username   = $email_company;               // SMTP username
$mail_recipient->Password   = $password;                    // SMTP password
$mail_recipient->SMTPSecure = $encryption;                  // Enable TLS encryption, `ssl` also accepted

//Recipients

    $mail_recipient->setFrom($email_company);               // Email from sender

$mail_recipient->addAddress($email_recipient);              // Email to recipient

//Content
$mail_recipient->isHTML(true);                       // Set email format to HTML
$mail_recipient->Subject = $subject_recipient;              // Subject for recipient mail
$mail_recipient->Body    = $message_recipient;              // Body content
$mail_recipient->AltBody = strip_tags($message_recipient);  // Stripped message for mailservices without HTML
} catch (Exception $e) {
    echo "recipient_mail error";
}