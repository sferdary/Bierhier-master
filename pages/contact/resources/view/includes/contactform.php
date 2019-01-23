<form method="post" action="">
    <div class="form-group">
        <label for="name">* Naam</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Naam" required>
    </div>
    <div class="form-group">
        <label for="email">* Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="cellphone">Telefoonnummer</label>
        <input type="number" name="cellphone" class="form-control" id="cellphone"
               placeholder="Telefoon nr.">
    </div>
    <div class="form-group">
        <label for="comment">* Bericht</label>
        <textarea type="text" name="comment" class="form-control"
                  id="comment" placeholder="Bericht" rows="6" required></textarea>
    </div>
    <div class="form-group">
        <label for="terms_conditions" class="checkbox-inline">
            <input type="checkbox" name="terms_conditions" id="terms_conditions" required>
            Ik heb de algemene voorwaarden gelezen en verklaar hierbij dat ik akkoord ga.
        </label>
    </div>
    <div class="form-group">
        <?php if (isset($_GET['captcha_fail'])) { ?>
            <div style="color: red;">Captcha failed, please try again!</div>
        <?php } ?>
        <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY_v2; ?>"></div>
        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
    </div>
    <button type="submit" name="submit" class="btn btn-primary" id="submit">Verstuur</button>
</form>