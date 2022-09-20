<?php
require_once "conexion.php";
class clsModelInsertTDoc
{
    static public function medModelInsertTDoc($tabla,$datos)
    {

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (Nombre) VALUES (:nombreTDoc)");
        $stmt->bindParam(":nombreTDoc",$datos["Nombre"],PDO::PARAM_STR);

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