<?php
require_once "conexion.php";
class clsModelListVentasDash
{
    /* Seleccionar producto */

        static public function medModelListVentasDash()
        {
            $stmt = conexion::conectar()->prepare("SELECT COUNT(IdVenta) AS Venta FROM venta");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function medModelListVentasDash2()
        {
            $stmt = conexion::conectar()->prepare("SELECT COUNT(IdProducto) AS producto FROM producto");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function medModelListVentasDash3()
        {
            $stmt = conexion::conectar()->prepare("SELECT COUNT(Idcliente) AS cliente FROM cliente");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function medModelListVentasDash4()
        {
            $stmt = conexion::conectar()->prepare("SELECT COUNT(IdEmpleado)AS empleado FROM empleado");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

        static public function medModelListVentasDash5()
        {
            $stmt = conexion::conectar()->prepare("SELECT COUNT(IdProveedor) AS proveedor FROM proveedor");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
        static public function medModelListVentasDash6($Fech)
        {
            $stmt = conexion::conectar()->prepare("SELECT COUNT(IdVenta) AS ventadia FROM venta WHERE DATE(FechaEmision) LIKE '$Fech'");

            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }

}



    ?>