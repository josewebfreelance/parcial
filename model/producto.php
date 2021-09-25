<?php
class Producto
{
	private $pdo;
    
    public $idProducto;
    public $producto;
    public $idMarca;
    public $descripcion;
    public $precio_costo;
    public $precio_venta;
    public $existencia;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM Producto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM Producto WHERE idProducto = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM Producto WHERE idProducto = ?");

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE Producto SET 
						producto        = ?, 
						idMarca         = ?,
                        descripcion     = ?,
						precio_costo    = ?, 
						precio_venta    = ?,
						existencia    = ?
				    WHERE idProducto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->producto,
                        $data->idMarca,
                        $data->descripcion,
                        $data->precio_costo,
                        $data->precio_venta,
                        $data->existencia,
                        $data->idProducto
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Producto $data)
	{
		try 
		{
		$sql = "INSERT INTO Producto (producto, idMarca, descripcion, precio_costo, precio_venta, existencia) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->producto,
                    $data->idMarca,
                    $data->descripcion,
                    $data->precio_costo,
                    $data->precio_venta,
                    $data->existencia
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
