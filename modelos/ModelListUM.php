<?php
require_once "conexion.php";
class clsModelListUM
{
    /* Seleccionar Proveedor */

        static public function medModelListUM()
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM unidadmedida");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>