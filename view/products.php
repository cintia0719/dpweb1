<<<<<<< Updated upstream
<div class="container">
    <h4 class="mt-3 mb-3">Lista de Productos</h4>
    <a href="<?= BASE_URL ?>new-product" class="btn btn-primary">Nuevo +</a>
    <br><br>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr>
                <th class="text-center">Nro</th>
                <th class="text-center">Codigo</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Fecha_vencimiento</th>
                <th class="text-center">Imagen</th>
                <th class="text-center">Acciones</th>

            </tr>
        </thead>
        <tbody id="content_products">

        </tbody>
    </table>
</div>
<script src="<?= BASE_URL ?>view/function/product.js"></script>
<script>

</script>
=======
<div class="container" style="margin-top: 17px">
        <div class="card">
            <div class="card-header" style="text-align: center;">
                Registro de Productos
            </div>
            <form id="frm_categoria" action="" method="">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-3 col-form-label">codigo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">detalle</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">precio</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">stock</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">id_categoria</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">fecha_vencimiento</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">imagen</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-3 col-form-label">id_proveedor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="detalle" name="detalle">
                        </div>
                    </div>
                     <div class="mb-3 row">
                        <label for="rol" class="col-sm-3 col-form-label">Rol</label>
                        <div class="col-sm-9">
                            <select class="form-select" aria-label="default select example" id="rol" name="rol" required>
                                <option value="admin"></option>
                                <option value="admin">Administrador</option>
                                <option value="user">Usuario</option>
                                <option value="guest">Invitado</option>
                            </select>
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

<script src="<?php echo BASE_URL; ?>view/function/products.js"></script>
    
>>>>>>> Stashed changes
