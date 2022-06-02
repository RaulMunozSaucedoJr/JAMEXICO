<div class="col-md-12">
    <h1 class="text-center">Registro de applicantes</h1>
</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation" id="frm_jobs"
    novalidate>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-xl-6 mt-2">
            <div class="form-group">
                <label for="">Nombre(s):</label>
                <input type="hidden" name="idps" id="idps" value="">
                <input type="text" name="name" id="name" placeholder="Nombre(s):" class="form-control" required>
                <p>
                    <strong>
                        El nombre deberá de tener únicamente letras y números. NO se aceptan carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 mt-2">
            <div class="form-group">
                <label for="">Apellido(s):</label>
                <input type="text" name="last_name" id="last_name" placeholder="Apellido(s):" class="form-control"
                    required>
                <p>
                    <strong>
                        Los apellidos deberá de tener únicamente letras y números. NO se aceptan carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 mt-2">
            <div class="form-group">
                <label for="">Número Movil:</label>
                <input type="text" name="mobile_number" id="mobile_number" placeholder="Número Movil"
                    class="form-control" required>
                <p>
                    <strong>
                        El número movil únicamente acepta números/digitos. Aparte de tener que comenzar con 55.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 mt-2">
            <div class="form-group">
                <label for="">Número Fijo:</label>
                <input type="text" name="house_number" id="house_number" placeholder="Número Fijo" class="form-control"
                    required>
                <p>
                    <strong>
                        El número movil únicamente acepta números/digitos. Aparte de tener que comenzar con 55.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 mt-2">

            <div class="form-group">
                <label for="">Curp:</label>
                <input type="text" name="curp" id="curp" placeholder="Curp" class="form-control" required>
                <p>
                    <strong>
                        El curp debera contener 18 caractéres/letras/números.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
                <small>El curp deberá ser registrado con mayúsculas</small>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl- mt-2">
            <div class="form-group">
                <label for="">Grado Escolar:</label>
                <input type="text" name="degree" id="degree" placeholder="Grado Académico" class="form-control"
                    required>
                <p>
                    <strong>
                        La contraseña deberá tener al menos:<br>1 letras mayúscula, minúscula, 1 número y caracácter
                        especial.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-xl-12 mt-2">
            <div class="form-group">
                <label for="mobile_number">Correo Electrónico</label>
                <input type="text" inputmode="email" name="email" id="email" placeholder="Correo Electrónico"
                    class="form-control" required>
                <p>
                    <strong>
                        Favor de ingresar un correo electrónico válido. Ejemplo: correo@gmail.com
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 mt-4">
            <button type="button" value="Registrar" id="registrar" class="btn btn-success btn-lg">
                Registrar voluntario
            </button>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 mt-4">
            <a href="/src/layout/components/pages/dashboard.php" type="button" class="btn btn-outline-* btn-lg">
                <span>
                    Regresar al dashboard
                </span>
            </a>
        </div>
    </div>
</form>