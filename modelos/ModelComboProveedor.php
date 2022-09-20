<?php
require_once "conexion.php";

class clsModelComboProveedor
{
    static public function medModelComboProveedor()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM proveedor");

        if($stmt->execute())
        {
            $arrayproducto=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arrayproducto,$row['NombreEmpresa']);
            }
            return $arrayproducto;

        }
    }
}

?>