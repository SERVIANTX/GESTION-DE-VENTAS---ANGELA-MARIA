<?php
require_once "conexion.php";
class clsModelListCategoria
{
    /* Seleccionar Proveedor */

        static public function medModelListCategoria()
        {
            $stmt = conexion::conectar()->prepare("SELECT * FROM categoriaproducto");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>