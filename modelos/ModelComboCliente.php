<?php
require_once "conexion.php";

class clsModelComboCliente
{
    static public function medModelComboCliente()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM cliente");

        if($stmt->execute())
        {
            $arrayproducto=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arrayproducto,$row['RazonSocial']);
            }
            return $arrayproducto;

        }
    }
}

?>