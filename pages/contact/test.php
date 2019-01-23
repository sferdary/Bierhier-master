<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 10:28
 */

require_once 'includes/error.handler.php';                      // Path to the error handler of the mail handler
include_once 'includes/controllers/reCaptcha_v3_controller.php';
use Credentials\ReCaptchaV3\reCaptcha_v3_controller;
session_start();

$name = $_SESSION['post_data']['name'];
$email_recipient = $_SESSION['post_data']['email'];
$cellphone = $_SESSION['post_data']['cellphone'];
$comment = $_SESSION['post_data']['comment'];
$terms_conditions = $_SESSION['post_data']['terms_conditions'];
$g_recaptcha_v2 = $_SESSION['post_data']['g_recaptcha_v2'];
$g_recaptcha_v3 = $_SESSION['post_data']['g_recaptcha_v3'];
?>


    <b>name</b>                 <?php echo $name; ?>                <br>
    <b>mail</b>                 <?php echo $email_recipient; ?>     <br>
    <b>phone</b>                <?php echo $cellphone; ?>           <br>
    <b>comment</b>              <?php echo $comment; ?>             <br>
    <b>terms</b>                <?php echo $terms_conditions; ?>    <br><br>
    <b>recaptcha v2:</b><br>    <?php echo $g_recaptcha_v2; ?>      <br><br>
    <b>recaptcha v3:</b><br>    <?php echo $g_recaptcha_v3; ?>      <br><br>

<?php
include_once 'includes/controllers/reCaptcha_v3_controller.php';
$reCaptcha_v3_handler = new reCaptcha_v3_controller($g_recaptcha_v3);
$data = $reCaptcha_v3_handler->getCaptcha_v3();
 var_dump($data);
