<?php
require_once "conexion.php";
class clsModelUpdateCargoAc
{
    static public function medModelUpdateCargoAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE cargoempleado SET Nombre=:nombre WHERE IdCargoEmpleado =:idcargoe ");
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
         $stmt->bindParam(":idcargoe",$datos["IdCargo"],PDO::PARAM_STR);


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