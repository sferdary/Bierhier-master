<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 14:30
 */


$message =                                                                                                              // The variables are sorted in a table, this will be displayed in the body of the email
    "<h3>Bericht:</h3>
<table>
    <tr><td><b>Naam:       </b></td><td>" . $name . "</td></tr>
    <tr><td><b>Email adres:</b></td><td>" . $email_recipient . "</td></tr>
    <tr><td><b>Telefoon:   </b></td><td>" . $cellphone . "</td></tr>
    <tr><td><b>Vraag:      </b></td></tr> 
</table>" .
    $comment . "<br>";

$dt = new DateTime();                                                                                                  // Get current date and time
$timestamp = "<br>" . $dt->format('d-m-Y H:i:s');                                                               // DateTime will be stored in a variable in the Dutch date format
$terms_conditions = utf8_decode("<br>" . $name . " is akkoord gegaan met de algemene voorwaarden.");

$subject_company = utf8_decode("Bier Hier - " . $name . " heeft een vraag gesteld");                              // Subject of the email for the company
$name_company = utf8_decode("Het Bier Hier team");                                                                // The name of the company
$message_company = $message . $timestamp . $terms_conditions . $bot_check;                                              // The body of the email for the company

$subject_recipient = utf8_decode("Bier Hier - U heeft een vraag gesteld");                                         // Subject of the email for the recipient
$salutation_recipient = utf8_decode("Beste " . $name . ",<br><br>");                                               // Salutation to the recipient
$auto_message = utf8_decode("Bedankt voor uw vraag! <br>Wij nemen zo spoedig mogelijk contact met u op.<br><br>"); // An automatic message for the recipient
$conclusion = utf8_decode("Met vriendelijke groet,<br><br>" . $name_company);                                      // Conclusion of the email for the recipient
$message_recipient = $salutation_recipient . $auto_message . $conclusion . "<br>" . $message;                            // The body of the email for the recipient
