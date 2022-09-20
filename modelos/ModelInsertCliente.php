<?php
require_once "conexion.php";
class clsModelInsertCliente
{
    static public function medModelInsertCliente($tabla,$datos)
    {

        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (RazonSocial,Direccion,RucDNI) VALUES (:razonsocial,:direccion,:rucdni)");
        $stmt->bindParam(":razonsocial",$datos["RazonSocial"],PDO::PARAM_STR);
        $stmt->bindParam(":direccion",$datos["Direccion"],PDO::PARAM_STR);
        $stmt->bindParam(":rucdni",$datos["RucDNI"],PDO::PARAM_STR);

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
    /* Seleccionar Cliente */

    static public function medModelSeleccionarCliente($tabla)
    {
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt = null;
    }
}

?>