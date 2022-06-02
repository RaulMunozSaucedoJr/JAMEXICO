<!DOCTYPE html>
<html lang="es">

<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>

<body>

    <div class="container-fluid faqs">
        <div class="row">

            <!-- FAQ´S -->
            <div class="col-xs-12 col-md-6 col-xl-6 faqs_left">
                <?php
                    include_once '../../organisms/accordions/faq/faq.php';
                ?>
            </div>
            <!----------->
            <div class="col-xs-12 col-md-6 col-xl-6 faqs_right">
                <!-- This div contains a backgorund image -->
            </div>
        </div>
    </div>

    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
</body>

</html>