<?php
require_once "conexion.php";
class clsModelListKardexSalida
{
    static public function medModelListKardexSalida($datos)
    {

        $stmt = conexion::conectar()->prepare("SELECT p.Nombre,ds.Cantidad AS can, ds.Lote, ds.PrecioVenta, s.Motivo AS mov FROM documentosalida AS s INNER JOIN detalledocumentosalida AS ds
        ON s.IdDocumentoSalida= ds.IdDocumentoSalida INNER JOIN producto AS p
        ON p.IdProducto = ds.IdProducto WHERE p.Nombre = :nombre");
        $stmt->bindParam(":nombre",$datos["Productokardex"],PDO::PARAM_STR);

        $stmt->execute();
            
        $respuesta = $stmt->fetchAll();
        return $respuesta;



    
    }
}

?>