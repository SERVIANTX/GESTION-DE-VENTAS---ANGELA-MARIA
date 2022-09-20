<?php
require_once "conexion.php";
class clsModelListProducto
{
    /* Seleccionar producto */

        static public function medModelListProducto()
        {
            $stmt = conexion::conectar()->prepare("SELECT p.IdProducto,p.Marca,p.Nombre,u.Nombre AS UnidadMedida,c.Nombre AS Categoria
                    FROM producto p INNER JOIN categoriaproducto c
                    ON c.IdCategoriaProducto = p.IdCategoriaProducto INNER JOIN unidadmedida u
                    ON u.IdUnidadMedida = p.IdUnidadMedida
                    ORDER BY p.IdProducto");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>