<!DOCTYPE html>
<html lang="es">

<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <div class="container-fluid container_register_applicants">
        <div class="row">
            <div class="col-md-3 container_register_applicants_left">
                <!-- Registration for applicants form -->
                <?php
                    include_once '../../organisms/forms/applicants/applicants.php';
                ?>
                <!---------------------------------->
            </div>
            <div class="col-md-9 container_register_applicants_right">
                <div class="row">
                    <!-- Filter and tables voluntiers -->
                    <?php
                        include_once '../../organisms/tables/applicants.php';
                    ?>
                    <!---------------------------------->
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>

    <script>
    const dataTable = new simpleDatatables.DataTable("#basic", {
        searchable: true,
        footer: false,
        perPage: true,
        perPageSelect: [2, 4, 6, 8, 10],
        paging: true,
        truncatePager: true,
        sorteable: true,
        layout: {
            top: "{search}{select}",
        },
        labels: {
            placeholder: "Buscar registros...",
            perPage: "{select} Registros por página",
            noRows: "No se encontrarón registros...",
            info: "Mostrando {start} a {end} de {rows} registros",
        }
    })
    </script>

    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>

    <script src="/src/backend/apis/applicants/applicants_api.js"></script>
</body>

</html>