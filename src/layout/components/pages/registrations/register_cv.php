<!-- Conection to bd -->
<?php
    include_once '../../../../backend/controller/controller.php';
?>
<!--------------------->

<!DOCTYPE html>
<html lang="es">
<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <div class="container-fluid container_register_cv">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-xl-12 container_register_cv_center">
                <div class="row">
                    <?php
                        include_once '../../organisms/forms/cv/CV.php';
                    ?>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 col-xl-12 container_register_cv_bottom">
                <div class="row">
                    <?php
                        include_once '../../organisms/tables/CV.php';
                    ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer resources -->
    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
    <!---------------------->

    <!-- Api CV -->
    <script src="/src/backend/apis/cv/cv_api.js"></script>
    <!------------>

    <!-- Validation form -->
    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>
    <!--------------------->

    <!-- Data-tables -->
    <script src="/src/frontend/assets/javascript/datatables/datatables.js"></script>
    <!----------------->

    <!-- Initialiation ckeditor and taginputs -->
    <script>
    var input = document.querySelector('input[name=skills]');
    new Tagify(input);

    var input = document.querySelector('input[name=laboral_links]');
    new Tagify(input);
    </script>
    <!------------------------------------------>
</body>

</html>