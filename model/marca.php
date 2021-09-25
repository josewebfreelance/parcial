<?php


class Marca
{

    private $pdo;

    public $idMarca;
    public $descripcion;

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

            $stm = $this->pdo->prepare("SELECT * FROM Marca");
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
                ->prepare("SELECT * FROM Marca WHERE idMarca = ?");


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
                ->prepare("DELETE FROM Marca WHERE idMarca = ?");

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
            $sql = "UPDATE Marca SET 
						descripcion     = ?
				    WHERE idMarca = ?";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->descripcion,
                        $data->idMarca
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function Registrar(controller $data)
    {
        try
        {
            $sql = "INSERT INTO Marca (descripcion) 
		        VALUES (?)";

            $this->pdo->prepare($sql)
                ->execute(
                    array(
                        $data->descripcion
                    )
                );
        } catch (Exception $e)
        {
            die($e->getMessage());
        }
    }

}
