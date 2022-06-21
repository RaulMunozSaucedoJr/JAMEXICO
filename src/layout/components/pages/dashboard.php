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


                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Usuarios:</h1>
                            </div>
                            <div class="card-body">
                                <?php
                                $sql = "SELECT COUNT(id) AS num FROM users";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                                <h1>
                                    <?php echo $row['num'] . '<br>USUARIOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Empleos:</h1>
                            </div>
                            <div class="card-body">
                                <?php
                                $sql = "SELECT COUNT(id) AS jobs FROM jobs";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                                <h1>
                                    <?php echo $row['jobs'] .'<br>EMPLEOS REGISTRADOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Aplicantes:</h1>
                            </div>
                            <div class="card-body">
                                <?php
                                $sql = "SELECT COUNT(id) AS aplicants FROM applicants";
                                $stmt = $pdo->prepare($sql);
                                $stmt->execute();
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                            ?>
                                <h1>
                                    <?php echo $row['aplicants'] .'<br>APLICANTES REGISTRADOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>


                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Tickets:</h1>
                            </div>
                            <div class="card-body">
                                <?php
                                    $sql = "SELECT COUNT(id) AS tickets FROM tickets";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <h1>
                                    <?php echo $row['tickets'] .'<br>TICKETS REGISTRADOS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>



                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Chatbot</h1>
                            </div>
                            <div class="card-body">
                                <?php
                                    $sql = "SELECT COUNT(id) AS preguntas_respuestas FROM chatbot";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <h1>
                                    <?php echo $row['preguntas_respuestas'] .'<br>PREGUNTAS/RESPUESTAS'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-4 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h1>Posts</h1>
                            </div>
                            <div class="card-body">
                                <?php
                                    $sql = "SELECT COUNT(id) AS posts FROM blog";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute();
                                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <h1>
                                    <?php echo $row['posts'] .'<br>POST'; ?>
                                </h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- //!Chatbot -->
            <?php
                include_once '../organisms/chatbot/chatbot.php';
            ?>
            <!------------->

        </div>
        <!------------------>

    </div>

    <!-- //!Modal chatbot -->
    <?php
        include_once '../organisms/modals/modal_chatbot.php';
    ?>
    <!------------------->

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
    $(document).ready(function() {
        $("#send-btn").on("click", function() {
            $value = $("#data").val();
            $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value +
                '</p></div></div>';
            $(".form").append($msg);
            $("#data").val('');

            // iniciar el código ajax
            $.ajax({
                url: '/src/backend/model/chatbot/actions/message.php',
                type: 'POST',
                data: 'text=' + $value,
                success: function(result) {
                    $replay =
                        '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' +
                        result + '</p></div></div>';
                    $(".form").append($replay);
                    // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                    $(".form").scrollTop($(".form")[0].scrollHeight);
                }
            });
        });
    });
    </script>


</body>

</html>