<h1 class="page-header">
    <?php echo $alm->idProducto != null ? $alm->producto : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Productos</a></li>
  <li class="active"><?php echo $alm->idProducto != null ? $alm->producto : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=Producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idProducto" value="<?php echo $alm->idProducto; ?>" />
    
    <div class="form-group">
        <label>Producto</label>
        <input type="text" name="producto" value="<?php echo $alm->producto; ?>" class="form-control" placeholder="Ingrese su producto" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Marca</label>
        <input type="text" name="idMarca" value="<?php echo $alm->idMarca; ?>" class="form-control" placeholder="Ingrese su marca" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control" placeholder="Ingrese su descripción" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Precio costo</label>
        <input type="text" name="precio_costo" value="<?php echo $alm->precio_costo; ?>" class="form-control" placeholder="Ingrese precio costo" data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Precio venta</label>
        <input type="text" name="precio_venta" value="<?php echo $alm->precio_venta; ?>" class="form-control" placeholder="Ingrese precio venta" data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Existencia</label>
        <input type="text" name="existencia" value="<?php echo $alm->existencia; ?>" class="form-control" placeholder="Ingrese existencia" data-validacion-tipo="requerido" />
    </div>

    <hr />
    
    <div class="text-right">
        <a href="?c=Producto" type="button" class="btn btn-danger">Cancelar</a>
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>
