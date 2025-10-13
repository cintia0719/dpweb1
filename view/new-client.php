
<!-- inicio de cuerpo de pagina -->
    <div class="container" style="margin-top:170px">
        <div class="card">

        <div class="card-header" style="text-align: center;">
                Registro de Clientes
            </div>
            <form id="frm_client" action="" method="">
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nro_identidad" class="col-sm-2 col-form-label">Nro de documento</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nro_identidad" name="nro_identidad" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="razon_social" class="col-sm-2 col-form-label">Nombre/razón social</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="razon_social" name="razon_social" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="telefono" name="telefono" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="correo" class="col-sm-2 col-form-label">Correo</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="departamento" class="col-sm-2 col-form-label">Departamento</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="departamento" name="departamento" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="provincia" class="col-sm-2 col-form-label">Provincia</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="provincia" name="provincia" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="distrito" class="col-sm-2 col-form-label">Distrito</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="distrito" name="distrito" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="cod_postal" class="col-sm-2 col-form-label">Codigo postal</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="cod_postal" name="cod_postal" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="rol" class="col-sm-2 col-form-label">Rol</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="rol" id="rol" required readonly>
                                <option value="cliente" selected>Cliente</option>
                            </select>
                        </div>
                    </div>
                    <div style=" display:flex; justify-content:center; gap:20px">
                        <button type="submit"   class="btn btn-info">Registrar</button >
                        <button type="reset"   class="btn btn-primary" id="clearBtn">Limpiar</button>
                        <!--<button type="button" onclick="alerth()" class="btn btn-danger" >Cancelar</button>-->
                        <a href="<?=BASE_URL ?>clients" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
    </div>
    <!-- FIN de cuerpo de pagina -->
     <script src="<?php echo BASE_URL?>view/function/clients.js"> </script>
