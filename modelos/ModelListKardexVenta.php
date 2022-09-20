<?php
require_once "conexion.php";
class clsModelListKardexVenta
{
    static public function medModelListKardexVenta($datos)
    {

        $stmt = conexion::conectar()->prepare("SELECT p.Nombre,dv.CantidadProducto, dv.PrecioUnitario, dv.Importe, dv.Lote, v.Devolucion  FROM venta AS v INNER JOIN detalleventa AS dv 
        ON v.Idventa = dv.Idventa INNER JOIN producto AS p 
        ON dv.IdProducto = p.IdProducto  WHERE p.Nombre = :nombre");
        $stmt->bindParam(":nombre",$datos["Productokardex"],PDO::PARAM_STR);

        $stmt->execute();
            
        $respuesta = $stmt->fetchAll();
        return $respuesta;



    
    }
}

?>