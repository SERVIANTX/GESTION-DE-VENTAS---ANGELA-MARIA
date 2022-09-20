<?php
require_once "conexion.php";
class clsModelListProductoAc
{
    /* Seleccionar Proveedor */

        static public function medModelListProductoAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT p.IdProducto,p.Marca,p.Nombre,u.Nombre AS UnidadMedida,p.IdUnidadMedida,c.Nombre AS Categoria,p.IdCategoriaProducto
                                                        FROM producto p INNER JOIN categoriaproducto c
                                                        ON c.IdCategoriaProducto = p.IdCategoriaProducto INNER JOIN unidadmedida u
                                                        ON u.IdUnidadMedida = p.IdUnidadMedida WHERE IdProducto=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>