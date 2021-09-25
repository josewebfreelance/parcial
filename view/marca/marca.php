<div class="position-relative">
    <h1 class="page-header">Marca</h1>

    <table class="table table-striped" style="height: 60vh">
        <thead>
        <tr>
            <th style="width:180px;">Marca</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($this->model->Listar() as $r): ?>
            <tr>
                <td style="width: 80%"><?php echo $r->descripcion; ?></td>
                <td>
                    <a href="?c=Marca&a=Crud&idMarca=<?php echo $r->idMarca; ?>">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Marca&a=Eliminar&idMarca=<?php echo $r->idMarca; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a class=" btn-create" href="?c=Marca&a=Crud">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
    </a>
</div>
