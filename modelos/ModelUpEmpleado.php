<?php
require_once "conexion.php";
class clsModelUpdateEmpleado
{
    static public function medModelUpdateEmpleado($datos)
    {

            $stmt = conexion::conectar()->prepare("UPDATE empleado SET Nombre=:nombreE, Apellido=:apelldioE, Direccion=:direccionE, Telefono=:telefonoE, IdCargoEmpleado=:IdCargo, Nacionalidad=:nacionalidadE, NombreUsuario=:UsuarioE, Contrasenia=:ContraE, DocumentoIdentificacion=:TipoDoc, NumeroDocumento=:NumDoc, Estado=:Activo WHERE IdEmpleado =:idEmple ");
            $stmt->bindParam(":nombreE",$datos["Nombre"],PDO::PARAM_STR);
            $stmt->bindParam(":apelldioE",$datos["Apellido"],PDO::PARAM_STR);
            $stmt->bindParam(":direccionE",$datos["Direccion"],PDO::PARAM_STR);
            $stmt->bindParam(":telefonoE",$datos["Telefono"],PDO::PARAM_STR);
            $stmt->bindParam(":IdCargo",$datos["IdCargoEmpleado"],PDO::PARAM_STR);
            $stmt->bindParam(":nacionalidadE",$datos["Nacionalidad"],PDO::PARAM_STR);
            $stmt->bindParam(":UsuarioE",$datos["NombreUsuario"],PDO::PARAM_STR);
            $stmt->bindParam(":ContraE",$datos["Contrasenia"],PDO::PARAM_STR);
            $stmt->bindParam(":TipoDoc",$datos["DocIdentificacion"],PDO::PARAM_STR);
            $stmt->bindParam(":NumDoc",$datos["NumeroDocumento"],PDO::PARAM_STR);
            $stmt->bindParam(":Activo",$datos["Activo"],PDO::PARAM_STR);
            $stmt->bindParam(":idEmple",$datos["IdEm"],PDO::PARAM_STR);

            if($stmt->execute())
            {
                return "ok";
                $stmt->close();
                $stmt = null;

            }
            else
            {
                print_r(conexion::conectar()->errorInfo);
                $stmt->close();
                $stmt = null;
            }
    }
}
