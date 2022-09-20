<?php
require_once "conexion.php";
class clsModelListComprobante
{
    /* Seleccionar Proveedor */

        static public function medModelListComprobante()
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM comprobanteventa");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>