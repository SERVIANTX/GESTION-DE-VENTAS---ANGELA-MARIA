<?php
require_once "conexion.php";
class clsModelListComprobanteAc
{
    /* Seleccionar Proveedor */

        static public function medModelListComprobanteAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM comprobanteventa where IdComprobanteVenta=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>