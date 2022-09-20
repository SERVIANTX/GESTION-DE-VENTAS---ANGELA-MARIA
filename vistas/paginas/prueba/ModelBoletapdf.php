<?php
    require_once "conexionpdf.php";
class clsModelNumeroBoletapdf
{
    /* Seleccionar producto */

        static public function medModelNumeroBoletapdf()
        {
            $stmt = conexion::conectar()->prepare("SELECT  NumeroDocumentoVenta AS boleta FROM venta ORDER BY idventa DESC  LIMIT 1");
            $stmt->execute();
            return  $respuesta = $stmt->fetch();
         
        }
    }
?>