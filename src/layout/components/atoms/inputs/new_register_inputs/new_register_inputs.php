<div class="col-xs-12 col-md-12 col-xl-12 mt-4">
    <h1>REGISTRO DE USUARIO</h1>
</div>

<div class="col-xs-12 col-md-12 col-xl-12 mt-4">
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="username" id="username"
            class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
            value="<?php echo $username; ?>">
        <p>
            <strong>
                El usuario NO aceptará carácteres especiales. Favor de verificar.
            </strong>
        </p>
        <span class="invalid-feedback"><?php echo $username_err; ?></span>
    </div>
</div>

<div class="col-xs-12 col-md-12 col-xl-12 mt-4">
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="password" id="password"
            class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
            value="<?php echo $password; ?>" autocomplete="off">
        <p>
            <strong>
                La contraseña deberá tener al menos:<br>1 letras mayúscula, minúscula, 1 número y caracácter especial.
            </strong>
        </p>
        <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>
</div>

<div class="col-xs-12 col-md-12 col-xl-12 mt-4">
    <div class="form-group">
        <label>Repetir Contraseña</label>
        <input type="password" name="confirm_password" id="confirm_password"
            class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
            value="<?php echo $confirm_password; ?>" autocomplete="off">
        <p>
            <strong>
                La contraseña deberá tener al menos:<br>1 letras mayúscula, minúscula, 1 número y caracácter especial.
            </strong>
        </p>
        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
    </div>
</div>

<div class="col-md-6 pt-4">
    <div class="form-group">
        <input type="submit" id="submit_user" class="btn btn-success" value="Submit">
    </div>
</div>
<div class="col-md-6 pt-4">
    <div class="form-group">
        <input type="reset" id="reset_user" class="btn btn-warning" value="Reset">
    </div>
</div>

<div class="co-md-12 text-center mt-4">
    <a href="../../../../../Index.php" target="_blank" rel="noopener noreferrer">
        ¿Ya tiene registro con nosotros?. Ingrese aquí.
        <i class="fa-solid fa-house"></i>
    </a>
</div>