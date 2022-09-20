<?php
require_once "conexion.php";
class clsModelListKardex
{
    /* Seleccionar producto */

        static public function medModelListKardex()
        {
            $stmt = conexion::conectar()->prepare("SELECT p.Nombre AS produc, k.StockMinimo, k.PrecioVenta,k.PrecioCompraUltimo,k.CantidadEntrada,k.CantidadSalida FROM kardex AS k INNER JOIN producto AS p
            ON k.IdProducto = p.IdProducto");
            $stmt->execute();
            
            $respuesta = $stmt->fetchAll();
            return $respuesta;
        }


}