<?php
require_once "conexion.php";
class clsModelInsertCargo
{
    static public function medModelInsertCargo($tabla,$datos)
    {

    $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (Nombre) VALUES (:nombrecargo)");
    $stmt->bindParam(":nombrecargo",$datos["Nombre"],PDO::PARAM_STR);


        if($stmt->execute())
        {
            return "ok";
            $stmt->close();
            $stmt = null;

        }
        else
        {
            print_r(conexion::conectar()->errorInfo);
            $stmt->close();
            $stmt = null;
        }
    }
}

?>