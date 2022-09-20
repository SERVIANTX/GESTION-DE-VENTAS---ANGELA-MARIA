<?php
require_once "conexion.php";
class clsModelUpdateEmisionAc
{
    static public function medModelUpdateEmisionAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE documentoemision SET Nombre=:nombre WHERE IdDocumentoEmision =:idemi ");
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
         $stmt->bindParam(":idemi",$datos["Idemision"],PDO::PARAM_STR);


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