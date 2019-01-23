<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 16:26
 */

namespace Credentials\ReCaptchaV3;
include_once '../includes/model/Credentials.php';
use Credentials\Credentials;

class reCaptcha_v3_controller extends Credentials
{
    protected $g_response;

    public function __construct($g_response)
    {
        $this->g_response = $g_response;
    }

    public function getCaptcha_v3()
    {
        $keys = $this->setCaptcha_v3();
        $secret_key = $keys['reCaptcha_v3_secret'];
        $g_response = $this->g_response;

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        define('SECRET_KEY', $secret_key);
        define('RESPONSE', $g_response);
        define('SERVER', $_SERVER['REMOTE_ADDR']);
        $request = $url . "?secret=" . SECRET_KEY . "&response=" . RESPONSE . "&remoteip=" . SERVER;
        $getResponse = file_get_contents($request);
        $response = json_decode($getResponse);

        return $response;
    }
}