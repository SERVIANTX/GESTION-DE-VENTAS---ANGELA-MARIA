<?php
require_once "conexion.php";
class clsModelUpdateProveedorAc
{
    static public function medModelUpdateProveedorAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE proveedor SET NombreEmpresa=:empresa,RUC=:ruc,Telefono=:telefono,Direccion=:direccion,Correo=:correo WHERE IdProveedor =:Idprov ");
        $stmt->bindParam(":empresa",$datos["NombreEmpresa"],PDO::PARAM_STR);
        $stmt->bindParam(":ruc",$datos["RUC"],PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos["Telefono"],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos["Direccion"],PDO::PARAM_STR);
        $stmt->bindParam(":correo",$datos["Correo"],PDO::PARAM_STR);
        $stmt->bindParam(":Idprov",$datos["IdProveedor"],PDO::PARAM_STR);


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