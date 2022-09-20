<?php
    require_once "conexionpdf.php";
class clsModelReporteProducto
{
    /* Seleccionar producto */

        static public function medModelReporteProducto()
        {
            $stmt = conexion::conectar()->prepare("SELECT  p.IdProducto,p.Nombre,p.Marca,u.Nombre AS UnidadMedida, cp.Nombre AS Categoria
                                  FROM producto p INNER JOIN unidadmedida u 
                                  ON u.IdUnidadMedida = p.IdUnidadMedida INNER JOIN categoriaproducto cp
                                  ON cp.IdCategoriaProducto = p.IdCategoriaProducto");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }
?>