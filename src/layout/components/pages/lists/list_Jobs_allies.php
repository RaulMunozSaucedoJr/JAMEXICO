<!DOCTYPE html>
<html lang="es">

<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <?php
        include_once '../../organisms/navs/jobs/jobs_navbar.php';
    ?>

    <section class="container-fluid job_allie_container">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xl-6 job_allie_container_left">
                <h1>JA-ALLIES</h1>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-6 job_allie_container_right">
            </div>
            <div class="col-xs-12 col-md-12 col-xl-12 job_allie_container_bottom">
                <div class="container">
                    <div class="row">


                        <div class="col-12">
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "crud";
                            $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
                            $sql = "SELECT id, title_job, company_name, job_address, salary, type_job, job_description, email FROM jobs";
                            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                            while( $record = mysqli_fetch_assoc($resultset) ) {
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h1>
                                        <?php echo $record['title_job']; ?>
                                    </h1>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li> <?php echo $record['title_job']; ?></li>
                                        <li> <?php echo $record['company_name']; ?></li>
                                        <li> <?php echo $record['job_address']; ?></li>
                                        <li> <?php echo $record['salary']; ?></li>
                                        <li> <?php echo $record['type_job']; ?></li>
                                        <li> <?php echo $record['job_description']; ?></li>
                                    </ul>
                                </div>
                                <div class="card-footer">
                                    <div class="conatainer-fluid">
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="mailto:<?php echo $record['email']; ?>"
                                                    class="btn btn-outline-* mt-1">
                                                    <i class="fa-solid fa-envelope"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>

</body>

</html>