<?php
require_once "conexion.php";

class clsModelComboCargo
{
    static public function medModelComboCargo()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT Nombre FROM cargoempleado");

        if($stmt->execute())
        {
            $arraycargo=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arraycargo,$row['Nombre']);
            }
            return $arraycargo;

        }
    }
    static public function medModelComboCargoId()
    {
        $con= conexion::conectar();
        $stmt = $con->prepare("SELECT IdCargoEmpleado FROM cargoempleado");

        if($stmt->execute())
        {
            $arraycargoid=array();
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                array_push($arraycargoid,$row['IdCargoEmpleado']);
            }
            return $arraycargoid;

        }
    }
}

?>