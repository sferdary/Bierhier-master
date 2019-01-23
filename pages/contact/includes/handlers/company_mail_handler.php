<?php

//Company mail settings

use PHPMailer\PHPMailer\PHPMailer;                        // Path to the PHPMailer class
use PHPMailer\PHPMailer\Exception;                        // Path to the Exception class
try {
//Server settings
    $mail_company = new PHPMailer(true);              // Create an new PHPMailer request
    $mail_company->isSMTP();                                    // Set mailer to use SMTP
    $mail_company->SMTPAuth = true;                             // Enable SMTP authentication
    $mail_company->Port = 587;                                  // TCP port to connect to
    $mail_company->SMTPDebug = 0;                               // 0 = No output / 1 = errors + msg / 2 = msg
    $mail_company->Host = $host;                                // Specify main and backup SMTP servers
    $mail_company->Username = $email_company;                   // SMTP username
    $mail_company->Password = $password;                        // SMTP password
    $mail_company->SMTPSecure = $encryption;                    // Enable TLS encryption, `ssl` also accepted

//Recipients

    $mail_company->setFrom($email_company);
    // Email from sender
    $mail_company->addAddress($email_company);                  // Email to company

//Content
    $mail_company->isHTML(true);                        // Set email format to HTML
    $mail_company->Subject = $subject_company;                 // Subject for company mail
    $mail_company->Body = $message_company;                    // Body content
    $mail_company->AltBody = strip_tags($message_company);     // Stripped message for mailservices without HTML
} catch (Exception $e) {
    echo 'company_mail error';
}