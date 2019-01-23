<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 21:58
 */
namespace Credentials;
class Credentials
{
    //email
    private $email = '';
    private $password = '';
    private $host= '';
    private $encryption= '';

    //reCaptcha v2
    private $reCaptcha_v2_public = '';
    private $reCaptcha_v2_secret = '';

    //reCaptcha v3
    private $reCaptcha_v3_public = '';
    private $reCaptcha_v3_secret = '';

    protected function setEmail()
    {
        $email = $this->email;
        $password = $this->password;
        $host = $this->host;
        $encryption = $this->encryption;
        $result = array
        (
            'email' => $email,
            'password' => $password,
            'host' => $host,
            'encryption' => $encryption
        );

        return $result;
    }

    protected function setCaptcha_v2()
    {
        $reCaptcha_v2_public = $this->reCaptcha_v2_public;
        $reCaptcha_v2_secret = $this->reCaptcha_v2_secret;
        $result = array
        (
            'reCaptcha_v2_public' => $reCaptcha_v2_public,
            'reCaptcha_v2_secret' => $reCaptcha_v2_secret
        );

        return $result;
    }

    protected function setCaptcha_v3()
    {
        $reCaptcha_v3_public = $this->reCaptcha_v3_public;
        $reCaptcha_v3_secret = $this->reCaptcha_v3_secret;
        $result = array
        (
            'reCaptcha_v3_public' => $reCaptcha_v3_public,
            'reCaptcha_v3_secret' => $reCaptcha_v3_secret
        );
        return $result;
    }

    public function publicKeys()
    {
        $reCaptcha_v2_public = $this->reCaptcha_v2_public;
        $reCaptcha_v3_public = $this->reCaptcha_v3_public;
        $result = array
        (
            'reCaptcha_v2_public' => $reCaptcha_v2_public,
            'reCaptcha_v3_public' => $reCaptcha_v3_public,
        );
        return $result;
    }
}