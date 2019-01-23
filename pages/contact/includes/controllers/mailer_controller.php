<?php

/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 23:47
 */

namespace Credentials\Mailer;
include_once 'includes/model/Credentials.php';
use Credentials\Credentials;

class Mailer extends Credentials
{
    public function setMail()
    {
        $result = $this->setEmail();
        return $result;
    }
}