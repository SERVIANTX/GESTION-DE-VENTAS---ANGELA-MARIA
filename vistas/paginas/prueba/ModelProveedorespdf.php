<?php
require_once "conexionpdf.php";
class clsModelListProveedor
{
    /* Seleccionar Proveedor */

        static public function medModelListProveedor($tabla)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>