<?php
require_once "conexion.php";
class clsModelInsertProveedor
{
    static public function medModelInsertProveedor($tabla,$datos)
    {

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (NombreEmpresa,RUC,Telefono,Direccion,Correo) VALUES (:empresa,:ruc,:telefono,:direccion,:correo)");
        $stmt->bindParam(":empresa",$datos["NombreEmpresa"],PDO::PARAM_STR);
        $stmt->bindParam(":ruc",$datos["RUC"],PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos["Telefono"],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos["Direccion"],PDO::PARAM_STR);
        $stmt->bindParam(":correo",$datos["Correo"],PDO::PARAM_STR);


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