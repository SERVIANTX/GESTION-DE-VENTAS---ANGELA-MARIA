<?php
require_once "conexion.php";
class clsModelListReporteCliente
{

    static public function medModelListReporteCliente()
    {
        $stmt = conexion::conectar()->prepare("SELECT * FROM cliente");

            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }

?>