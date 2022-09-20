<?php
require_once "conexion.php";
class clsModelListKardexEntrada
{
    static public function medModelListKardexEntrada($datos)
    {

        $stmt = conexion::conectar()->prepare("SELECT p.Nombre,de.CantidadComprada, de.Lote, de.PrecioVenta,de.PrecioCompra FROM detalledocumentoentrada AS de INNER JOIN producto AS p
        ON de.IdProducto = p.IdProducto WHERE p.Nombre = :nombre");
        $stmt->bindParam(":nombre",$datos["Productokardex"],PDO::PARAM_STR);

        $stmt->execute();
            
        $respuesta = $stmt->fetchAll();
        return $respuesta;



    
    }
}

?>