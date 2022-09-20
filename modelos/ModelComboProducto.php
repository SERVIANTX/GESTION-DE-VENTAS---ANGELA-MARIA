<?php
require_once "conexion.php";

class clsModelComboProducto
{
    static public function medModelComboProducto()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM producto");

        if($stmt->execute())
        {
            $arrayproducto=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arrayproducto,$row['Nombre']);
            }
            return $arrayproducto;

        }
    }
}

?>