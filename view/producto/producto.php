<div class="position-relative">
    <h1 class="page-header">Productos</h1>

    <table class="table table-striped" style="height: 60vh">
        <thead>
        <tr>
            <th style="width:180px;">Producto</th>
            <th>Marca</th>
            <th>Descripcion</th>
            <th style="width:120px;">Precio costo</th>
            <th style="width:120px;">Precio venta</th>
            <th style="width:120px;">Existencia</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td><?php echo $r->producto; ?></td>
                <td><?php echo $r->idMarca; ?></td>
                <td><?php echo $r->descripcion; ?></td>
                <td><?php echo $r->precio_costo; ?></td>
                <td><?php echo $r->precio_venta; ?></td>
                <td><?php echo $r->existencia; ?></td>
                <td>
                    <a href="?c=Producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a class="btn-create" href="?c=Producto&a=Crud">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
</div>
