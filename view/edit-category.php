<div class="container" style="margin-top: 170px">
    <div class="card">
        <div class="card-header" style="text-align: center;">Editar Categoría</div>
      
        <div class="card-body">
        <form id="frm_edit_category" action="" method="POST">
            <?php
                $categoria_id = "";
                // Verifica si 'views' está en la URL y si el array tiene el ID de la categoría.
                if (isset($_GET["views"])) {
                    $ruta = explode("/", $_GET["views"]);
                    if (count($ruta) > 1) {
                        $categoria_id = $ruta[1];
                    }
                }
                ?>
                <input type="hidden" name="id_categoria" id="id_categoria" value="<?= htmlspecialchars($categoria_id); ?>">
            <div class="card-body">
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-3 col-form-label">Nombre de categoría</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="detalle" class="col-sm-3 col-form-label">Detalle de categoría</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="detalle" name="detalle">
                    </div>
                </div>
                <div style="display: flex; justify-content: center; gap: 20px">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                    <a href="<?= BASE_URL ?>category" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo BASE_URL ?>view/function/category.js"> </script>
