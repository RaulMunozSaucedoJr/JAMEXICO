<div class="modal fade" id="modal_view_post" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="staticBackdropLabel">
                    <?php echo $q['title'];?>
                </h1>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                <?php echo $q['content'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline* bnt-lg" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>