<?php
require_once 'model/producto.php';

class ProductoController {
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['idProducto'])){
            $alm = $this->model->Obtener($_REQUEST['idProducto']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->idProducto = $_REQUEST['idProducto'];
        $alm->producto = $_REQUEST['producto'];
        $alm->idMarca = $_REQUEST['idMarca'];
        $alm->descripcion = $_REQUEST['descripcion'];
        $alm->precio_costo = $_REQUEST['precio_costo'];
        $alm->precio_venta = $_REQUEST['precio_venta'];
        $alm->existencia = $_REQUEST['existencia'];

        $alm->idProducto > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idProducto']);
        header('Location: index.php');
    }
}
