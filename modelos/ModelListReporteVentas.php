<?php
require_once "conexion.php";
class clsModelListVenta
{

    static public function medModelListVenta()
    {
        $stmt = conexion::conectar()->prepare("SELECT v.Idventa,c.RazonSocial,v.FechaEmision,v.NumeroDocumentoVenta,CONCAT_WS(' ',e.Nombre, e.Apellido) AS NombreE,
        p.Nombre AS NombreProducto,dv.CantidadProducto,dv.PrecioUnitario,dv.Importe,dv.Lote
        FROM venta v INNER JOIN cliente c
        ON c.IdCliente = v.IdCliente INNER JOIN empleado e
        ON e.IdEmpleado = v.IdEmpleado INNER JOIN detalleventa dv
        ON dv.IdVenta = v.IdVenta INNER JOIN comprobanteventa cv
        ON cv.IdComprobanteVenta = v.IdComprobanteVenta INNER JOIN producto p
        ON p.IdProducto = dv.IdProducto 
        ORDER BY dv.Idventa
        ");

            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

?>