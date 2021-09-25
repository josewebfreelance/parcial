<h1 class="page-header">
    <?php echo $alm->idMarca != null ? $alm->descripcion : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Marca">Marcas</a></li>
  <li class="active"><?php echo $alm->idMarca != null ? $alm->descripcion : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-marca" action="?c=Marca&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idMarca" value="<?php echo $alm->idMarca; ?>" />
    
    <div class="form-group">
        <label>Descripción</label>
        <input type="text" name="descripcion" value="<?php echo $alm->descripcion; ?>" class="form-control" placeholder="Ingrese una descripción" data-validacion-tipo="requerido" />
    </div>

    <hr />
    
    <div class="text-right">
        <a href="?c=Marca" type="button" class="btn btn-danger">Cancelar</a>
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-marca").submit(function(){
            return $(this).validate();
        });
    })
</script>
