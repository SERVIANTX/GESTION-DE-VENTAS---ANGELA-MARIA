<?php
require_once "conexion.php";
class clsModelUpdateUMAc
{
    static public function medModelUpdateUMAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE unidadmedida SET Nombre=:nombre WHERE IdUnidadMedida =:IdUM ");
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
         $stmt->bindParam(":IdUM",$datos["IdUnidad"],PDO::PARAM_STR);


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