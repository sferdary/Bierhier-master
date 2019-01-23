<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 10:17
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8"> <!--Website scaling-->
    <title>Contact</title>
    <link href="resources/css/contact.css" rel="stylesheet" type="text/css"> <!--Link specifieke contact CSS-->
    <link href="resources/css/navigation.css" rel="stylesheet" type="text/css"> <!--Link specifieke contact CSS-->
    <link href="resources/css/body.css" rel="stylesheet" type="text/css"> <!--Link specifieke contact CSS-->
    <link href="resources/css/footer.css" rel="stylesheet" type="text/css"> <!--Link specifieke contact CSS-->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin+Condensed|Vollkorn" rel="stylesheet">
    <link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="resources/js/jquery-3.3.1.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY_v3; ?>'></script>
</head>
<body>
<div id="content" class="animate-bottom"><?php require_once 'resources/view/includes/navbar.html'; ?></div>
<div class="container">