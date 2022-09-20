<?php
require_once "conexion.php";
class clsModelListCargo
{
    /* Seleccionar Proveedor */

        static public function medModelListCargo()
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM cargoempleado");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>