<?php
session_start();                                                                        // Initializes the session
$name = $_SESSION['post_data']['name'];                                                 // Gets the name from the form post
$email_recipient = $_SESSION['post_data']['email'];                                     // Gets the email from the form post
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
</head>
<body>
<div id="content" class="animate-bottom"><?php require_once 'resources/view/includes/navbar.html'?></div>
<div class="container">
    <div id="success">
        <h3>Bedankt voor je vraag <?php echo $name; ?>!</h3>
        <p>
            Er is een bevestiging gestuurd naar <?php echo $email_recipient; ?><br>
            Wij nemen zo snel mogelijk contact met je op!
        </p>
        <a href="#">
            <button class="btn btn-primary">Home</button
        </a>
    </div>
</div>
<div><?php require_once 'resources/view/layouts/footer.php'; ?></div>
<script src="resources/js/popper.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>