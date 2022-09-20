<?php
require_once "conexion.php";
class clsModelListEmpleadoAc
{
    /* Seleccionar Proveedor */

        static public function medModelListEmpleadoAc($varid)
        {
            $stmt = conexion::conectar()->prepare("SELECT e.IdEmpleado,e.Nombre, e.Apellido,e.Direccion,e.Telefono,
                c.Nombre AS Cargo,e.IdCargoEmpleado,e.Nacionalidad,e.NombreUsuario,e.DocumentoIdentificacion,
                e.NumeroDocumento,e.Estado,e.contrasenia
                FROM empleado e INNER JOIN cargoempleado c
                ON c.IdCargoEmpleado = e.IdCargoEmpleado WHERE IdEmpleado=$varid");
            $stmt->execute();
            return $stmt->fetch();
            $stmt->close();
            $stmt = null;
        }
    }

    ?>