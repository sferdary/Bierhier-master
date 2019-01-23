<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 13:17
 */

include_once '../includes/controllers/reCaptcha_v3_controller.php';
use Credentials\ReCaptchaV3\reCaptcha_v3_controller;
session_start();

require_once '../vendor/autoload.php';                             // Path to the PHPMailer autoloader from composer
require_once '../includes/error.handler.php';                      // Path to the error handler of the mail handler
require_once '../includes/handlers/session_handler.php';                      // Path to the error handler of the mail handler

$success = false;                                           // Success is false by default

try {                                                           // Try to connect to the SMTP server en send the email
    if (isset($terms_conditions)) {                              // If submit is set then require the post handler
        if (isset($g_recaptcha_v3)) {

            $reCaptcha_v3_handler = new reCaptcha_v3_controller($g_recaptcha_v3);
            $data = $reCaptcha_v3_handler->getCaptcha_v3();
            if ($data->succes == true) {
                if ($data->score < 0.5){
                    utf8_decode("Het formulier is mogelijk niet door een persoon ingevuld.");
                }else{
                    utf8_decode("Deze persoon is een geveriëerd persoon.");
                }
            }
        }
        require_once '../includes/handlers/email_handler.php';
    }

    if ($mail_company->send() && $mail_recipient->send()) {
        $success = true;                                            // Sending thr emails is a success
    }

} catch (Exception $e) {                                        // If there is an excpetion then it will be catched here
    echo $mail_error, $mail_company->ErrorInfo;                 // Echoes the error message en what kind of error it is
}

if (isset($success)) {                                         // If the mails are sended successful
    header("Location: ../form_success.php");            // Then redirect to the success page
}