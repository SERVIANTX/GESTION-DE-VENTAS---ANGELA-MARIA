<?php
require_once "conexion.php";

class clsModelComboUnidad
{
    static public function medModelComboUnidad()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM unidadmedida");

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