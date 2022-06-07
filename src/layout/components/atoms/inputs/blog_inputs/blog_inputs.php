<div class="col-xs-12 col-md-12 col-xl-12">
    <div class="form-group" hidden>
        <label for="id">Identificador</label>
        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
    </div>
</div>

<div class="col-xs-12 col-md-12 col-xl-12">
    <div class="form-group">
        <label for="title">Titulo del post:</label>
        <input type="text" placeholder="Titulo del post" class="form-control" name="title" value="<?php echo $q['title']?>">
    </div>
</div>

<div class="col-xs-12 col-md-12 col-xl-12 mt-5">
    <div class="form-group">
        <label for="content">Contenido del post</label>
        <textarea name="content" id="content" class="form-control" cols="30" rows="10"><?php echo $q['content']?></textarea>
    </div>
</div>

<div class="col-md-6 mt-4">
    <button class="btn btn-outline-success text-dark btn-lg mt-5" name="update">
        Actualizar
    </button>
</div>
<div class="col-md-6 mt-4">
    <button class="btn btn-outline-danger text-dark btn-lg mt-5" name="delete">
        Borrar
    </button>
</div>