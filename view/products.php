
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



