<?php
require_once "conexion.php";
class clsModelListNumeroBoletaVenta
{


        static public function medModelListNumeroBoletaVenta()
        {
            $stmt = conexion::conectar()->prepare("SELECT CONCAT_WS('', NumeroBalotario, NumeroSerie+1) AS NUMBOLETA FROM comprobanteventa LIMIT 1");
            $stmt->execute();
            $respuesta= $stmt->fetch();
            return $respuesta;
          
        }
    }

    ?>