<?php
require_once "conexion.php";

class clsModelComboEmpleado
{
    static public function medModelComboEmpleado()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT CONCAT_WS(' ', Nombre, Apellido) AS empleado FROM empleado");

        if($stmt->execute())
        {
            $arrayproducto=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arrayproducto,$row['empleado']);
            }
            return $arrayproducto;

        }
    }
}

?>
