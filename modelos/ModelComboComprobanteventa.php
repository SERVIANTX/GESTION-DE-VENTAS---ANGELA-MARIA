<?php
require_once "conexion.php";

class clsModelComboComprobanteventa
{
    static public function medModelComboComprobanteventa()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM comprobanteventa");

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