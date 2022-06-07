<?php
    include_once '../../../../backend/model/blog/actions.php';
?>

<!DOCTYPE html>
<html lang="es">
<!-- Header Resources -->
<?php
    include_once '../../../../../src/frontend/assets/includes/header_resources/header_resources.php';
?>
<!---------------------->

<body>

    <header>
        <div class="container-fluid header_container_blog">
            <div class="row">
                <div class="col-md-6 header_container_blog_left">
                    <h1>Manejador de blog</h1>
                    <a type="button" class="btn btn-outline-* btn-lg" href="../dashboard.php">
                        <span>Regrsar al dashboard</span>
                        <i class="fa-solid fa-house"></i>
                    </a>
                </div>
                <div class="col-md-6 header_container_blog_right">
                    <!-- This div contains a background image  -->
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container-fluid container_cms_blog">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-xl-12 container_cms_blog_left">
                    <?php foreach($query as $q){ ?>
                    <form action="" method="post">
                        <div class="row">
                            <!-- Blog inputs -->
                            <?php
                                    include_once '../../../components/atoms/inputs/blog_inputs/blog_inputs.php';
                                ?>
                            <!----------------->
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Resources -->
    <?php
        include_once '../../../../../src/frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
    <!---------------------->

    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>


</body>

</html>