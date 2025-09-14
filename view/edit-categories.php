

    <div class="container" style="margin-top: 170px">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                Editar Categoría
            </div>
            <form id="frm_categoria" action="" method="">
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
                        <button type="submit" class="btn btn-info">Registrar</button>
                        <button type="reset" class="btn btn-primary">Limpiar</button>
                        <button type="button" class="btn btn-danger" onclick="cancelar()">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<script>listar_categorias_admin();</script>
<script>
    const id_cat = <?php $pagina = explode("/", $_GET['views']);
                    echo $pagina['1'];
                    ?>;
    ver_categoria(id_cat);
</script>
<script src="<?php echo BASE_URL; ?>view/function/categories.js"></script>
    

