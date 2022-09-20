<?php
    require_once "conexion.php";
class clsModelReporteKardex
{

        static public function medModelReporteKardex()
        {
            $stmt = conexion::conectar()->prepare("SELECT k.IdKardex,p.Nombre AS Producto,k.PrecioVenta,k.StockMinimo, k.CantidadEntrada, k.CantidadSalida
                                                    FROM kardex k INNER JOIN producto p
                                                    ON p.IdProducto = k.IdProducto
                                                    ORDER BY IdKardex
                                                    ");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
}
?>