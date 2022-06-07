<!-- Controlador -->
<?php
    include_once '../../../../backend/controller/controller.php';
?>
<!----------------->

<!-- Se inicializa la sesión para obtener el nombre de usuario -->
<?php
session_start(); 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /src/Index.php");
    exit;
}
?>
<!--------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">

<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <div class="container-fluid container_profile">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xl-6 container_profile_left">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            <?php echo htmlspecialchars($_SESSION["username"]); ?>
                        </h1>
                    </div>
                    <?php
                        $sql = "SELECT * FROM cv";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute();
                        $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="card-body">
                        <ul>
                            <li> <?php echo $row['address']; ?></li>
                            <li> <?php echo $row['cel_phone']; ?></li>
                            <li> <?php echo $row['email']; ?></li>
                            <li> <?php echo $row['website']; ?></li>
                            <li> <?php echo $row['profesional_studies']; ?></li>
                            <li> <?php echo $row['skills']; ?></li>
                            <li> <?php echo $row['laboral_experience']; ?></li>
                            <li> <?php echo $row['laboral_links']; ?></li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a type="button" class="btn btn-outline-* btn-lg"
                            href="/src/layout/components/pages/dashboard.php">
                            Regresar al panel de administración.
                            <i class="fa-solid fa-house"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-6 container_profile_right">
                <!-- This div contains a backgorund image -->
            </div>
        </div>
    </div>

    <!-- Footer resources -->
    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
    <!---------------------->
</body>

</html>