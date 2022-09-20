<?php
require_once "conexion.php";
class clsModelListVentaFechas
{

    static public function medModelListVentaFechas($datos)
    {
        $stmt = conexion::conectar()->prepare("SELECT v.Idventa,c.RazonSocial,v.FechaEmision,v.NumeroDocumentoVenta,CONCAT_WS(' ',e.Nombre, e.Apellido) AS NombreE,
                                                p.Nombre AS NombreProducto,dv.CantidadProducto,dv.PrecioUnitario,dv.Importe,dv.Lote
                                                FROM venta v INNER JOIN cliente c
                                                ON c.IdCliente = v.IdCliente INNER JOIN empleado e
                                                ON e.IdEmpleado = v.IdEmpleado INNER JOIN detalleventa dv
                                                ON dv.IdVenta = v.IdVenta INNER JOIN comprobanteventa cv
                                                ON cv.IdComprobanteVenta = v.IdComprobanteVenta INNER JOIN producto p
                                                ON p.IdProducto = dv.IdProducto
                                                WHERE v.FechaEmision BETWEEN CAST(:Ini AS DATE) AND CAST(:Fin AS DATE)");
            $stmt->bindParam(":Ini",$datos["FechaInicio"],PDO::PARAM_STR);
            $stmt->bindParam(":Fin",$datos["FechaFin"],PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

?>