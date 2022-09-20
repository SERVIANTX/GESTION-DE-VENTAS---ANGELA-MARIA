<?php
require_once "conexion.php";

class clsModelComboCategoria
{
    static public function medModelComboCategoria()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT * FROM categoriaproducto");

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