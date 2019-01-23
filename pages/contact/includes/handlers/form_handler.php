<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 12:51
 */
include_once 'includes/controllers/reCaptcha_v2_controller.php';
use Credentials\ReCaptchaV2\reCaptcha_v2_controller;

if (isset($_POST['submit'])) {
    session_start();

    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');                          // Posts name           / Will be stored in a variable  / Filters special characters from name
    $email_recipient = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');              // Posts email          / Will be stored in a variable  / Filters invalid characters from email
    $cellphone = htmlspecialchars($_POST['cellphone'], ENT_QUOTES, 'UTF-8');                // Posts phone number   / Will be stored in a variable  /
    $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES, 'UTF-8');                    // Posts the comment    / Will be stored in a variable
    $g_recaptcha_v2 = $_POST['g-recaptcha-response'];
    $g_recaptcha_v3 = $_POST['recaptcha_response'];

    $terms_conditions = htmlspecialchars($_POST['terms_conditions'], ENT_QUOTES, 'UTF-8');                                                                // Posts agreement of terms and conditions  / Will be stored in a variable

    $_SESSION['post_data'] = array();
    $_SESSION['post_data'] = array(
        'name' => $name,
        'email' => $email_recipient,
        'cellphone' => $cellphone,
        'comment' => $comment,
        'g_recaptcha_v2' => $g_recaptcha_v2,
        'g_recaptcha_v3' => $g_recaptcha_v3,
        'terms_conditions' => $terms_conditions
    );
}

if (isset($g_recaptcha_v2)) {

$g_v2_obj = new reCaptcha_v2_controller($g_recaptcha_v2);
    $data = $g_v2_obj->getCaptcha_v2();
    var_dump($data);
    if (isset($data->success) && $data->success == true) {
        header('Location: mailer');
    } else {
        header('Location: index.php?captcha_fail=true');
    }
}