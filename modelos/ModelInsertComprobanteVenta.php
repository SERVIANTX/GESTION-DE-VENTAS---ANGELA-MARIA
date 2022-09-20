<?php
require_once "conexion.php";
class clsModelInsertComprobanteVenta
{
    static public function medModelInsertComprobanteVenta($tabla,$datos)
    {

    $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (Nombre,NumeroBalotario,NumeroSerie) VALUES (:nombre,:serie,:numero)");
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
         $stmt->bindParam(":serie",$datos["serie"],PDO::PARAM_STR);
        $stmt->bindParam(":numero",$datos["Numero"],PDO::PARAM_STR);


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