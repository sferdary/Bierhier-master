<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 13:31
 */

include_once '../includes/controllers/mailer_controller.php';
use Credentials\Mailer\Mailer;

$email_object = new Mailer();
$email_credentials = $email_object->setMail();
$email_company = $email_credentials['email'];
$password = $email_credentials['password'];
$host = $email_credentials['host'];
$encryption = $email_credentials['encryption'];

require_once '../includes/handlers/message_handler.php';
require_once '../includes/handlers/company_mail_handler.php';
require_once '../includes/handlers/recipient_mail_handler.php';