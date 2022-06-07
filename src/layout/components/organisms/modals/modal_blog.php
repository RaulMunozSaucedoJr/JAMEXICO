<div class="modal fade" id="modal_blog" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="staticBackdropLabel">
                    Nuevo post
                </h1>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <form method="post" class="needs-validation" novalidate>
                            <div class="col-xs-12 col-md-12 col-xl-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Titulo del post" name="title"
                                        placeholder="Correo Electrónico" class="form-control" required>
                                    <div class="invalid-feedback">
                                        ¡Campo vacio!. Favor de verificarlo
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12 col-xl-12 mt-2">
                                <div class="form-group">
                                    <textarea name="content" id="content" class="form-control" cols="30" rows="10" placeholder="Contenido del blog" required></textarea>
                                    <div class="invalid-feedback">
                                        ¡Campo vacio!. Favor de verificarlo
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-md-12 col-xl-12 mt-2">
                                <button class="btn btn-outline-success btn-lg" name="new_post">
                                    Añadir post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline* bnt-lg" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>