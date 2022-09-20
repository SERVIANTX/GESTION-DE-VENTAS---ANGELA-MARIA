<?php
require_once "conexion.php";
class clsModelListUMAc
{
    /* Seleccionar Proveedor */

        static public function medModelListUMAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM unidadmedida where IdUnidadMedida=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>