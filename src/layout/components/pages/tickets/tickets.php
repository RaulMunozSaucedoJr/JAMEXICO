<!DOCTYPE html>
<html lang="en">
<?php
        include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
    ?>

<body>

    <div class="container-fluid container_tickets">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xl-6 container_tickets_left">
                <h1>Tickets</h1>
                <a type="button" class="btn btn-outline-* btn-lg" href="../dashboard.php">
                    Regresar al dashboard
                </a>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-6 container_tickets_right">
                <!-- This div contains a background image -->
            </div>
            <div class="col-xs-12 col-md-12 col-xl-12 container_tickets_bottom">
                <div class="row">
                    <div class="col-md-3 container_tickets_bottom_left">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                            class="needs-validation" id="frm" novalidate>
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
                                    <div class="form-group">
                                        <label for="ticket_name">Nombre del ticket</label>
                                        <input type="hidden" name="idp" id="idp" value="">
                                        <input type="text" inputmode="text" placeholder="Nombre del problema"
                                            id="title_ticket" name="title_ticket" class="form-control" required>
                                        <p>Este campo NO acepta carácteres especiales</p>
                                        <div class="invalid-feedback">
                                            ¡Campo vacio!. Favor de verificarlo
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
                                    <div class="form-group">
                                        <label for="sections">¿Que secciòn falla?</label>
                                        <input type="text" inputmode="text" placeholder="¿Que secciòn falla?"
                                            id="section" name="section" class="form-control" required>
                                        <p>Este campo NO acepta carácteres especiales</p>
                                        <div class="invalid-feedback">
                                            ¡Campo vacio!. Favor de verificarlo
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
                                    <div class="form-group">
                                        <label for="ticket_comment">Descripción del problema</label>
                                        <textarea name="description" id="description" class="form-control" cols="30"
                                            rows="10" placeholder="Descripción del problema" required></textarea>
                                        <p>Este campo NO acepta carácteres especiales</p>
                                        <div class="invalid-feedback">
                                            ¡Campo vacio!. Favor de verificarlo
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
                                    <button type="button" value="Registrar" id="registrar"
                                        class="btn btn-success btn-lg">
                                        Registrar ticket
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9 container_tickets_bottom_right">
                        <div class="form-group">
                            <label for="buscra">Buscar tickets:</label>
                            <input type="text" name="buscar" id="buscar" placeholder="Buscar tickets..."
                                class="form-control">
                        </div>

                        <div class="table-responsive">
                            <table class="table" id="tickets">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>I.D</th>
                                        <th>Nombre del ticket</th>
                                        <th>Sección</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="cantidad_tickets">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Form validation -->
    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>
    <!--------------------->

    <!-- API Ticket -->
    <script src="/src/backend/apis/tickets/tickets.js"></script>
    <!---------------->

    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>

    <script src="/src/frontend/assets/javascript/datatables/datatables.js"></script>
</body>

</html>