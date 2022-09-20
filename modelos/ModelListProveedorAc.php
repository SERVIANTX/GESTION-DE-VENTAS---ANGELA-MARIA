<?php
require_once "conexion.php";
class clsModelListProveedorAc
{
    /* Seleccionar Proveedor */

        static public function medModelListProveedorAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM proveedor where IdProveedor=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>