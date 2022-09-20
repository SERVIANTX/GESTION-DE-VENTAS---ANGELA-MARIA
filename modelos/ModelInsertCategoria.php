<?php
require_once "conexion.php";
class clsModelInsertCategoria
{
    static public function medModelInsertCategoria($tabla,$datos)
    {

    $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (Nombre) VALUES (:nombre)");
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);

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