<?php
    require_once "conexion.php";
class clsModelReporteEmpleado
{
    /* Seleccionar producto */

        static public function medModelReporteEmpleado()
        {
            $stmt = conexion::conectar()->prepare("SELECT e.IdEmpleado,CONCAT_WS(' ',e.Nombre, e.Apellido) AS Empleado,e.Direccion,e.Telefono,
                c.Nombre AS Cargo,e.IdCargoEmpleado,e.Nacionalidad,e.NombreUsuario,e.DocumentoIdentificacion,
                e.NumeroDocumento,e.Estado
                FROM empleado e INNER JOIN cargoempleado c
                ON c.IdCargoEmpleado = e.IdCargoEmpleado
                ORDER BY IdEmpleado");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt = null;
        }
    }
?>