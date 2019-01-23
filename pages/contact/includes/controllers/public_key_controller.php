<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 16/01/2019
 * Time: 00:00
 */

namespace Credentials\PublicKey;
include_once 'includes/model/Credentials.php';
use Credentials\Credentials;

class public_key_controller extends Credentials
{
    function setPublicKey()
    {
        $public_keys = $this->publicKeys();
        return $public_keys;
    }

}