<?php
    require_once '../../../../src/backend/controller/controller.php'
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
<html lang="en">

<?php
    include_once '../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <?php
            include_once '../organisms/sidebars/sidebar.php';
        ?>
        <!------------->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">
                <div class="row">

                    <!-- Navbar -->
                    <?php
                        include_once '../organisms/navs/dashboard/dashboard_navbar.php';
                    ?>
                    <!------------>

                    <!--Welcome Alert -->
                    <?php
                        include_once '../organisms/alerts/welcome_alert.php';
                    ?>
                    <!----------->


                    <div class="card">

                    </div>

                </div>
            </div>

        </div>
        <!------------------>

    </div>

    <!-- Footer -->
    <?php
        include_once '../organisms/footer/footer.php';
    ?>
    <!------------>

    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>

    <!-- Resources footer -->
    <?php
        include_once '../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
    <!---------------------->


</body>

</html>