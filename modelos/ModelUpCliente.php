<?php
require_once "conexion.php";
class clsModelUpdateClienteAc
{
    static public function medModelUpdateClienteAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE cliente SET RazonSocial=:razonsocial,Direccion=:direccion,RucDNI=:rucdni WHERE IdCliente =:Idclient ");
        $stmt->bindParam(":razonsocial",$datos["Razon"],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos["Direc"],PDO::PARAM_STR);
        $stmt->bindParam(":rucdni",$datos["Ruc"],PDO::PARAM_STR);
        $stmt->bindParam(":Idclient",$datos["IdCliente"],PDO::PARAM_STR);


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