<?php
require_once "conexion.php";
class clsModelListemisionAc
{
    /* Seleccionar Proveedor */

        static public function medModelListemisionAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM documentoemision where IdDocumentoEmision=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>