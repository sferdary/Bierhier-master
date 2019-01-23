<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 09:26
 */

include_once 'includes/controllers/public_key_controller.php';

use Credentials\PublicKey\public_key_controller;
$public_key_obj = new public_key_controller();
$key_public = $public_key_obj->setPublicKey();
$public_key_v2 = $key_public['reCaptcha_v2_public'];
$public_key_v3 = $key_public['reCaptcha_v3_public'];
define('SITE_KEY_v2', $public_key_v2);
define('SITE_KEY_v3', $public_key_v3);

require_once 'includes/handlers/form_handler.php';
require_once 'resources/view/layouts/header.php';
?>

    <div class="pagetitle"><h1>Neem contact met ons op!</h1></div>
    <div class="maps"><?php require_once 'resources/view/includes/maps_location.html'; ?></div>
    <div class="addressdata"><?php require_once 'resources/view/includes/address_data.html'; ?></div>
    <div class="contactform"><?php require_once 'resources/view/includes/contactform.php'; ?></div>

<?php require_once 'resources/view/layouts/footer.php'; ?>