<?php
    require_once "conexionpdf.php";
class clsModelClienteVentapdf
{
    /* Seleccionar producto */

        static public function medModelClienteVentapdf()
        {
            $stmt = conexion::conectar()->prepare("SELECT  c.RazonSocial AS Clientes,c.Direccion AS Direccion FROM venta v INNER JOIN cliente c
                                                     ON c.idcliente = v.idcliente
                                                     ORDER BY idventa DESC  LIMIT 1");
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
            $stmt->close();
            $stmt = null;
        }
    }
?>