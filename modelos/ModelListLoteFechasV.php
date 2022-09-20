<?php
require_once "conexion.php";
class clsModelListFechaLote
{
    static public function medModelListFechaLote($datos)
    {

        $stmt = conexion::conectar()->prepare("SELECT p.Marca AS marca,p.Nombre AS producto,de.Lote,de.FechaVencimiento
                                                FROM detalledocumentoentrada de INNER JOIN producto p
                                                ON p.IdProducto = de.IdProducto
                                                WHERE FechaVencimiento BETWEEN CAST(:Ini AS DATE) AND CAST(:Fin AS DATE)");
        $stmt->bindParam(":Ini",$datos["FechaInicio"],PDO::PARAM_STR);
        $stmt->bindParam(":Fin",$datos["FechaFin"],PDO::PARAM_STR);


        $stmt->execute();
            
        $respuesta = $stmt->fetchAll();
        return $respuesta;

        

    
    }
}

?>