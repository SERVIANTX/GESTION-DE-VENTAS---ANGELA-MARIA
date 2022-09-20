<?php
require_once "conexion.php";
class clsModelListCargoAc
{
    /* Seleccionar Proveedor */

        static public function medModelListCargoAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM cargoempleado where IdCargoEmpleado=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>