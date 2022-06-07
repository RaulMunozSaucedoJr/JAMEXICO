<?php
    require_once '../../../../backend/controller/controller.php'
?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /src/Index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <nav>

    </nav>

    <div class="container-fluid container_jobs">
        <div class="row">
            <div class="col-md-6 container_register_applicants_left">
                <!-- Registration for applicants form -->
                <?php
                    include_once '../../organisms/forms/jobs/jobs.php';
                ?>
                <!---------------------------------->
            </div>
            <div class="col-md-6 container_register_applicants_right">
                <div class="row">
                    <!-- Filter and tables voluntiers -->
                    <?php
                        include_once '../../organisms/tables/jobs.php';
                    ?>
                    <!---------------------------------->
                </div>
            </div>
        </div>
    </div>

    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>

    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>

    <script src="/src/backend/apis/jobs/jobs_api.js"></script>

    <script src="/src/frontend/assets/javascript/datatables/datatables.js"></script>


</body>

</html>