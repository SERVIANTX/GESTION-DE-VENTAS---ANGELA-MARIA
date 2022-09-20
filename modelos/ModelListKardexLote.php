<?php
require_once "conexion.php";
class clsModelListKardexLote
{
    static public function medModelListKardexLote($datos)
    {

        $stmt = conexion::conectar()->prepare("SELECT p.Nombre, de.Lote, de.QuedaCantidad FROM detalledocumentoentrada AS de INNER JOIN  producto AS p
        ON de.IdProducto=p.IdProducto
        WHERE p.Nombre = :nombre AND de.QuedaCantidad >= '0'");
        $stmt->bindParam(":nombre",$datos["Productokardex"],PDO::PARAM_STR);

        $stmt->execute();
            
        $respuesta = $stmt->fetchAll();
        return $respuesta;



    
    }
}

?>