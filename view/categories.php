<div class="container">
    <h4 class="mt-3 mb-3">Lista de Categoria</h4>
     <a href="<?= BASE_URL ?>new-category" class="btn btn-primary">Nuevo +</a>
    <br><br>
<table class="table table-success table-striped-columns">
    <thead>
        <tr>
            <th class="text-center">Nro</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Detalle</th>
            <th class="text-center">Acciones</th>
            
        </tr>
    </thead>
    <tbody id="content_categories">
        
    </tbody>
</table>
</div>
<script src="<?= BASE_URL ?>view/function/category.js"></script>
