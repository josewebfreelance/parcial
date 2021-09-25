<?php
require_once 'model/marca.php';

class MarcaController {

    private $model;

    public function __CONSTRUCT(){
        $this->model = new Marca();
    }

    public function Index(){
        require_once 'view/header.php';
        require_once 'view/marca/marca.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $alm = new Marca();

        if(isset($_REQUEST['idMarca'])){
            $alm = $this->model->Obtener($_REQUEST['idMarca']);
        }

        require_once 'view/header.php';
        require_once 'view/marca/marca-editar.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $alm = new Marca();

        $alm->idMarca = $_REQUEST['idMarca'];
        $alm->descripcion = $_REQUEST['descripcion'];

        $alm->idProducto > 0
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);

        header('Location: index.php');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idMarca']);
        header('Location: index.php');
    }
}
