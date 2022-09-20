<?php
require_once "conexion.php";

class clsModelComboEntradaDocEmision
{
    static public function medModelComboEntradaDocEmision()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM documentoemision");

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