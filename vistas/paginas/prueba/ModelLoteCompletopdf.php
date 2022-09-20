<?php
    require_once "conexionpdf.php";
class clsModelReporteFecha
{
    /* Seleccionar producto */

        static public function medModelReporteFecha()
        {
            $stmt = conexion::conectar()->prepare("SELECT p.Marca AS marca,p.Nombre AS producto,de.Lote,de.FechaVencimiento
                                                    FROM detalledocumentoentrada de INNER JOIN producto p
                                                    ON p.IdProducto = de.IdProducto
                                                    ");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }
?>