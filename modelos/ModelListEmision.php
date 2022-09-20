<?php
require_once "conexion.php";
class clsModelListemision
{
    /* Seleccionar Proveedor */

        static public function medModelListemision()
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM documentoemision");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>