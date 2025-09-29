<!-- inicio de cuerpo de pagina -->
<div class="container" style="margin-top:170px">
    <div class="card">

        <div class="card-header" style="text-align: center;">
            Registro de Producto
        </div>
        <div class="card-body">

            <form id="frm_product" action="" method="" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="codigo" class="col-sm-2 col-form-label">Codigo:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="codigo" name="codigo" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-2 col-form-label">Detalle:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="detalle" name="detalle" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="precio" class="col-sm-2 col-form-label">Precio:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="precio" name="precio" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stock" class="col-sm-2 col-form-label">Stock:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="stock" name="stock" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_categoria" class="col-sm-2 col-form-label">Categoria:</label>
                        <div class="col-sm-10">
                            <select name="id_categoria" id="id_categoria">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="fecha_vencimiento" class="col-sm-2 col-form-label">Fecha de Vencimiento</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="imagen" class="col-sm-2 col-form-label">Imagen:</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="imagen" name="imagen" accept=".jpg, .jpeg, .png" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_proveedor" class="col-sm-2 col-form-label">Proveedor:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="id_proveedor" name="id_proveedor " required>
                        </div>
                    </div>
                    <div style=" display:flex; justify-content:center; gap:20px">
                        <button type="submit" class="btn btn-info">Registrar</button>
                        <button type="reset" class="btn btn-primary" id="clearBtn">Limpiar</button>
                        <a href="<?= BASE_URL ?>product" class="btn btn-danger">Cancelar</a>

                    </div>
            </form>
        </div>
    </div>
    <!-- FIN de cuerpo de pagina -->
    <script src="<?php echo BASE_URL ?>view/function/product.js"> </script>
    <script>
        cargar_categorias();
    </script>