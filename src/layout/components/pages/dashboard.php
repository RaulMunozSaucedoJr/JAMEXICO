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

                    <?php
                        $sql = "SELECT COUNT(id) AS num FROM users";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Cantidad de usuarios inscritos:</h1>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <?php echo $row['num'] . '<br>USUARIOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <?php
                        $sql = "SELECT COUNT(id) AS jobs FROM jobs";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Cantidad de empleos inscritos:</h1>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <?php echo $row['jobs'] .'<br>EMPLEOS REGISTRADOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>


                    <?php
                        $sql = "SELECT COUNT(id) AS aplicants FROM applicants";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Cantidad de aplicantes inscritos:</h1>
                            </div>
                            <div class="card-body">
                                <h1>
                                    <?php echo $row['aplicants'] .'<br>APLICANTES REGISTRADOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <!-- Chatbot pop-up -->
                    <?php
                        include_once '../organisms/popups/chatbot.php';
                    ?>
                    <!-------------------->

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


    <!-- Resources footer -->
    <?php
        include_once '../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
    <!---------------------->

    <script src="/src/frontend/assets/javascript/index.js"></script>

    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>



</body>

</html>