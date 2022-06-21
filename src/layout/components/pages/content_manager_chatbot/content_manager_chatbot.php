<!DOCTYPE html>
<html lang="en">

<?php
        include_once '../../../../frontend/assets/includes/header_resources/header_resources.php';
    ?>

<body>

    <div class="container-fluid container_cms_chatbot">
        <div class="row">
            <div class="col-md-6 container_cms_chatbot_left">
                <h1>CMS CHATBOT</h1>
                <a class="btn btn-outline-* btn-lg" href="../dashboard.php">
                    Regresar al dashboard
                </a>
            </div>
            <div class="col-md-6 container_cms_chatbot_right">
                <!-- This div contains a background image-->
            </div>
            <div class="col-md-12 container_cms_chatbot_bottom">
                <div class="row">
                    <div class="col-md-3 container_cms_chatbot_bottom_left">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
                            class="needs-validation" id="frm">
                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <div class="form-group">
                                        <label for="queries">Pregunta/Palabras claves</label>
                                        <input type="hidden" name="idp" id="idp" value="">
                                        <input id="queries" class="form-control" type="text" name="queries" novalidate>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <div class="form-group">
                                        <label for="replies">Respuesta</label>
                                        <input id="replies" class="form-control" type="text" name="replies" novalidate>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5">
                                    <button type="button" value="Registrar" id="registrar"
                                        class="btn btn-success btn-lg">
                                        Registrar preguntas y respuestas
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-9 container_cms_chatbot_bottom_right">
                        <?php
                            include_once '../../organisms/tables/chatbot.php';
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
        include_once '../../../../frontend/assets/includes/footer_resources/footer_resources.php';
    ?>

    <script src="/src/backend/apis/chatbot/chatbot.js"></script>


    <script src="/src/frontend/assets/javascript/datatables/datatables.js"></script>

</body>

</html>