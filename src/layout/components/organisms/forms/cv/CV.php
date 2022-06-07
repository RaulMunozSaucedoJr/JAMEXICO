<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation" id="frm"
    novalidate>
    <div class="row">

        <div class="col-md-12">
            <h1 class="text-center">Creador de C.V.</h1>
        </div>

        <div class="col-xs-6 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="full_name">Nombre completo:</label>
                <input type="hidden" name="idp" id="idp" value="">
                <input type="text" name="full_name" id="full_name" placeholder="Nombre completo:" class="form-control"
                    required>
                <p>
                    <strong>
                        El nombre NO acepta carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="address">Dirección</label>
                <input type="text" name="address" id="address" placeholder="Dirección" class="form-control" required>
                <p>
                    <strong>
                        La dirección acepta ciertos carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="cel_phone">Teléfeono Movil</label>
                <input type="text" inputmode="tel" name="cel_phone" id="cel_phone" placeholder="Teléfono movil"
                    class="form-control" required>
                <p>
                    <strong>
                        El teléfono únicamente acepta digitos y/o numeros.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="text" inputmode="email" name="email" id="email" placeholder="Correo electrónico"
                    class="form-control" required>
                <p>
                    <strong>
                        Debe de ingresar un formato de correo electrónico válido.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="website">Sitio web</label>
                <input type="text" inputmode="url" name="website" id="website" placeholder="Sitio web"
                    class="form-control" required>
                <p>
                    <strong>
                        Debe de ingresar un formato de link válido.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="profesional_studies">Ultimo grado de estuidos</label>
                <input type="text" inputmode="text" name="profesional_studies" id="profesional_studies"
                    placeholder="Formaciòn profesional" class="form-control" required>
                <p>
                    <strong>
                        El grado de estudios NO acepta carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12 ">
            <div class="form-group">
                <label for="skills">Habilidades:</label>
                <input type="text" inputmode="text" name="skills" id="skills" placeholder="Habilidades"
                    class="form-control" required>
                <p>
                    <strong>
                        Este campo NO acepta carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12 ">
            <div class="form-group">
                <label for="laboral_experience">Experiencia laboral</label>
                <textarea class="form-control" placeholder="Experiencia laboral" id="laboral_experience"
                    name="laboral_experience" required></textarea>
                <p>
                    <strong>
                        La experiencia laboral NO acepta ciertos carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-12 col-xl-12 ">
            <div class="form-group">
                <label for="laboral_links">Links de experiencia laboral:</label>
                <input type="text" inputmode="url" name="laboral_links" id="laboral_links"
                    placeholder="Links de participaciones" class="form-control" required>
                <p>
                    <strong>
                        Este campo NO acepta carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>


        <div class="col-xs-12 col-md-12 col-xl-12">
            <button type="button" value="Registrar" id="registrar" class="btn btn-outline-* btn-lg">
                <span>
                    Registrar C.V.
                </span>
            </button>
        </div>

    </div>
</form>