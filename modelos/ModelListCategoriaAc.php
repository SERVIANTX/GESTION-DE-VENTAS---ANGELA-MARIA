<?php
require_once "conexion.php";
class clsModelListCategoriaAc
{
    /* Seleccionar Proveedor */

        static public function medModelListCategoriaAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM categoriaproducto where IdCategoriaProducto=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>