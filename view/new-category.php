<!-- inicio de cuerpo de pagina -->
    <div class="container" style="margin-top:170px">
        <div class="card">

        <div class="card-header" style="text-align: center;">
                Registro de Categoria
            </div>

            <form id="frm_category" action="" method="">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nombre" class="col-sm-2 col-form-label">Nombre de categoría</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="detalle" class="col-sm-2 col-form-label">Detalle de categoría</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="detalle" name="detalle" required>
                        </div>
                    </div>
                    <div style=" display:flex; justify-content:center; gap:20px">
                        <button type="submit"   class="btn btn-info">Registrar</button >
                        <button type="reset"   class="btn btn-primary" id="clearBtn">Limpiar</button>
                        <a href="<?= BASE_URL ?>category" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
    </div>
    <!-- FIN de cuerpo de pagina -->
     <script src="<?php echo BASE_URL?>view/function/category.js"> </script>