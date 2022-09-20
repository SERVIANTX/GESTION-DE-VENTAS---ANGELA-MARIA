<?php
    require_once "conexionpdf.php";
class clsModelReporteProductoMasVendido
{
    /* Seleccionar producto */

        static public function medModelReporteProductoMasVendido()
        {
            $stmt = conexion::conectar()->prepare("SELECT dv.IdProducto,p.Nombre AS NombreP,SUM(dv.cantidadProducto) AS cantidad FROM detalleventa dv INNER JOIN producto p
                    ON p.IdProducto=dv.IdProducto
                    GROUP BY IdProducto
                    ORDER BY cantidadProducto DESC");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }
?>