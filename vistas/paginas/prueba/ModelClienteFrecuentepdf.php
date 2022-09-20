<?php
    require_once "conexionpdf.php";
class clsModelReporteClienteFrecuente
{
    /* Seleccionar producto */

        static public function medModelReporteClienteFrecuente()
        {
            $stmt = conexion::conectar()->prepare("SELECT v.IdCliente,c.RazonSocial AS NombreC,COUNT(Idventa) AS Comprado FROM venta v INNER JOIN cliente c
                                                    ON v.IdCliente= c.IdCliente
                                                    GROUP BY IdCliente
                                                    ORDER BY Comprado DESC");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
        
    }
?>