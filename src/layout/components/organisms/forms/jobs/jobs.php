<div class="col-md-12">
    <h1 class="text-center">Registro de empleos</h1>
</div>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="needs-validation" id="frm"
    novalidate>
    <div class="row">
        <div class="col-xs-12 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="">Titulo del empleo</label>
                <input type="hidden" name="idp" id="idp" value="">
                <input type="text" name="title_job" id="title_job" placeholder="Nombre(s):" class="form-control"
                    required>
                <p>
                    <strong>
                        El título del empleo deberá de tener únicamente letras. NO se aceptan carácteres especiales y/
                        números.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="">Nombre de la empresa</label>
                <input type="text" name="company_name" id="company_name" placeholder="Nombre de la empresa"
                    class="form-control" required>
                <p>
                    <strong>
                        El nombre de la empresadeberá de tener únicamente letras y/o números. NO se aceptan carácteres
                        especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="">Ubicación</label>
                <input type="text" name="job_address" id="job_address" placeholder="Ubicaciòn de la empresa"
                    class="form-control" required>
                <p>
                    <strong>
                        La dirección NO acepta puntos y/o comas.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 ">
            <div class="form-group">
                <label for="">Salario:</label>
                <input type="text" name="salary" id="salary" placeholder="Salario" class="form-control" required>
                <p>
                    <strong>
                        El salario únicamente acepta números/digitos.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 ">

            <div class="form-group">
                <label for="">Tipo de puesto</label>
                <input type="text" name="type_job" id="type_job"
                    placeholder="Tiempo completo / Medio tiempo / Por contrato / Indefinido" class="form-control"
                    required>
                <p>
                    <strong>
                        El tipo de puesto NO aceptará números y/o carácteres especiales.
                    </strong>
                </p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 ">
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

        <div class="col-xs-12 col-md-12 col-xl-12 ">
            <div class="form-group">
                <label for="job_description">Descripción del empleo:</label>
                <textarea type="text" name="job_description" id="job_description" placeholder="Descripción del empleo"
                    class="form-control" required>
                </textarea>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-xl-6 pt-4">
            <button type="button" value="Registrar" id="registrar" class="btn btn-success btn-lg">
                Registrar voluntario
            </button>
        </div>
        <div class="col-xs-12 col-md-6 col-xl-6 pt-4">
            <a href="/src/layout/components/pages/dashboard.php" type="button" class="btn btn-outline-* btn-lg">
                <span>
                    Regresar al dashboard
                </span>
            </a>
        </div>
    </div>
</form>