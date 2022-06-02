<div class="col-xs-12 col-md-6 col-xl-6">
    <div class="form-group pt-4">
        <label class="form-label" for="username">Usuario</label>
        <input type="text" name="username" id="username"
            class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
            value="<?php echo $username; ?>" placeholder="Usuario">
        <p>
            <strong>
                El usuario únicamente deberá contener:<br>Letras, letras acentuadas y números.
            </strong>
        </p>
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
    </div>
</div>
<div class="col-xs-12 col-md-6 col-xl-6">
    <div class="form-group pt-4">
        <label class="form-label" for="password">Contraseña</label>
        <input type="password" inputmode="text" name="password" id="password"
            class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" autocomplete="off" placeholder="Contraseña">
        <p>
            <strong>
                La contraseña deberá tener al menos:<br>1 letras mayúscula, minúscula, 1 número y caracácter especial.
            </strong>
        </p>
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>
</div>