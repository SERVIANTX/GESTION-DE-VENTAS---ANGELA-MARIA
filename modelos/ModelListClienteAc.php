<?php
require_once "conexion.php";
class clsModelListClienteAc
{
    /* Seleccionar Proveedor */

        static public function medModelListClienteAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM cliente where IdCliente=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>