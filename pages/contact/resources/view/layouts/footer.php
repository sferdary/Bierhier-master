<?php
/**
 * Created by PhpStorm.
 * User: S. Ferdary
 * Date: 14/01/2019
 * Time: 10:19
 */
?>
</div>
<div class="container" id="container2">
    <footer class="FooterHomepage">
        <div class="row">
            <div class="col-sm">
                <h3 id="FooterH3">Navigatie</h3>
                <a href="../../index.html" id="FooterHome">Home</a>
                <a href="../recepten/receptenAlgemeen.html" id="FooterRecepten">Recepten</a><br>
                <a href="../concerten/concerten.html" id="FooterConcerten">Concerten</a>
                <a href="index.php" id="FooterContact">Contact</a><br>
                <a href="../sport/sport.html" id="FooterSport">Sport</a><br>
                <p id="FooterCopyright">copyright © roc-dev.com 2017</p>
            </div>
            <div class="col-sm">
                <img class=“img-responsive" id="FooterGroupPhoto" src="../../../../../img/Home/GroupPhoto.png">
            </div>
        </div>
    </footer>
</div>
<script src="resources/js/popper.min.js"></script>
<script src="resources/js/bootstrap.min.js"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('<?php echo SITE_KEY_v3; ?>', {action: 'homepage'})
            .then(function (token) {
                document.getElementById('recaptchaResponse').value = token;
            });
    });
</script>
</body>
</html>
