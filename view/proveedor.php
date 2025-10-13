<div class="container">
    <h4 class="mt-3 mb-3">Lista de Proveedor</h4>
    <a href="<?= BASE_URL ?>new-proveedor" class="btn btn-primary">Nuevo +</a>
    <br><br>
<table class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th class="text-center">Nro</th>
            <th class="text-center">DNI</th>
            <th class="text-center">Nombres y Apellidos</th>
            <th class="text-center">Correo</th>
            <th class="text-center">Rol</th>
            <th class="text-center">Estado</th>
            <th class="text-center">Acciones</th>
            
        </tr>
    </thead>
    <tbody id="content_proveedores">
        
    </tbody>
</table>
</div>
<script src="<?= BASE_URL ?>view/function/proveedores.js"></script>
<!--
<script>view_users();</script>-->
