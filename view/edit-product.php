<!-- inicio de cuerpo de pagina -->
<div class="container" style="margin-top:17px">
    <div class="card">

        <div class="card-header" style="text-align: center;">Editar Datos de Producto </div>
        <?php
        $producto_id = "";
        // Verifica si 'views' está en la URL y si el array tiene el ID del producto.
        if (isset($_GET["views"])) {
            $ruta = explode("/", $_GET["views"]);
            if (count($ruta) > 1) {
                $producto_id = $ruta[1];
            }
        }
        //echo $ruta[1];

        ?>
        <div class="card-body">
            <form id="frm_edit_product" action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_producto" id="id_producto" value="<?= htmlspecialchars($producto_id); ?>">

                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="codigo" class="col-sm-2 col-form-label">Código:</label>
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
                            <select class="form-control" name="id_categoria" id="id_categoria" required>
                                <option value="" disabled selected>seleccione</option>
                                <option value="1">id = 1</option>
                                <option value="2">id = 2</option>
                                <option value="3">id = 3</option>
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
                            <input type="file" class="form-control" id="imagen" name="imagen" required>
                            <div class="mb-3 row">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="id_proveedor" class="col-sm-2 col-form-label">Proveedor:</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="id_proveedor" id="id_proveedor" required>
                                <option value="" disabled selected>seleccione</option>
                                <option value="1">id = 1</option>
                                <option value="2">id = 2</option>
                                <option value="3">id = 3</option>
                            </select>
                        </div>
                    </div>
                    <div style=" display:flex; justify-content:center; gap:20px">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a hret="<?= BASE_URL ?>product" class="btn btn-danger">Cancelar</a>

                    </div>
            </form>
        </div>
    </div>
    <!-- FIN de cuerpo de pagina -->
    <script src="<?php echo BASE_URL ?>view/function/product.js"> </script>
    <script>
        // Llamar a la función para cargar los datos del producto cuando la página esté lista
        document.addEventListener('DOMContentLoaded', function() {
            edit_product();
        });
    </script>