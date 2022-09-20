<?php
    require_once "conexion.php";
class clsModelReporteStock
{
    /* Seleccionar producto */

        static public function medModelReporteStock()
        {
            $stmt = conexion::conectar()->prepare("
                                                    SELECT k.IdKardex,p.Nombre AS Producto,k.PrecioVenta,k.StockMinimo
                                                    FROM kardex k INNER JOIN producto p
                                                    ON p.IdProducto = k.IdProducto ORDER BY IdKardex
                                                    ");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }
?>