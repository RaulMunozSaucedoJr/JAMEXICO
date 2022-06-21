<!-- Conecctions and action to posts blog -->
<?php
    include_once '../../../../backend/model/blog/actions.php';
?>
<!------------------------------------------>

<!DOCTYPE html>
<html lang="es">
<!-- Header resources -->
<?php
    include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
?>
<!---------------------->

<body>

    <div class="container-fluid header_container_blog">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-xl-6 header_container_blog_left">
                <h1>JA-BLOG</h1>
                <a type="button" href="../dashboard.php" class="btn btn-outline-* btn-lg">
                    Regresar al dashboard
                </a>
            </div>
            <div class="col-xs-12 col-md-6 col-xl-6 header_container_blog_right">
                <!-- This div contains a background image -->
            </div>

            <div class="col-12 container_blog_content_bottom pb-5 mb-5">
                <div class="row">


                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <?php if(isset($_REQUEST['info'])){ ?>
                        <?php if($_REQUEST['info'] == "added"){?>
                        <div class="alert alert-success text-center" role="alert">
                            El post se ha añadido correctamente
                        </div>
                        <?php }?>
                        <?php } ?>
                    </div>

                    <?php foreach($query as $q){ ?>
                    <div class="col-xs-12 col-md-4 col-xl-4" id="busquedas">

                        <div class="card">
                            <div class="card-header">
                                <h1>
                                    <?php echo $q['title'];?>
                                </h1>
                            </div>
                            <div class="card-body">
                                <p>
                                    <?php echo $q['content'];?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6 col-xl-6">
                                            <a type="button"
                                                href="/src/layout/components/pages/content_manager_blog/content_manager_blog.php?id=<?php echo $q['id']?>"
                                                class="btn btn-outline-* btn-lg">
                                                Modificar post
                                            </a>
                                        </div>
                                        <div class="col-xs-12 col-md-6 col-xl-6">
                                            <a type="button" class="btn btn-outline-* btn-lg" data-bs-toggle="modal"
                                                data-bs-target="#modal_view_post">
                                                Ver post
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    </div>


    <!-- Fixed bottom create post -->
    <?php
        include_once '../../atoms/buttons/new_post/new_post.php';
    ?>
    <!------------------------------>

    <!-- Modal create post -->
    <?php
        include_once '../../organisms/modals/modal_blog.php';
    ?>
    <!----------------------->

    <!-- Modal view post -->
    <?php
        include_once '../../organisms/modals/modal_view_post.php';
    ?>
    <!--------------------->

    <!-- Footer resources -->
    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>
    <!---------------------->

    <script src="/src/frontend/assets/javascript/forms_validation/validations.js" type="module"></script>

    <script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
    </script>

</body>

</html>