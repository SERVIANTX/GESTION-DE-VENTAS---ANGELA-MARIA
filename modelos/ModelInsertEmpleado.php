
<?php
require_once "conexion.php";
class clsModelInsertEmpleado
{
    static public function medModelInsertEmpleado($tabla, $datos)
    {
        try {
            $conn= conexion::conectar();
            $stmt =$conn->prepare("INSERT INTO $tabla (Nombre,Apellido,Direccion,Telefono,IdCargoEmpleado,
            Nacionalidad,NombreUsuario,Contrasenia,DocumentoIdentificacion,NumeroDocumento,Estado)
            VALUES (:Nombre,:Apellido,:Direccion,:Telefono,:IdCargoEmpleado,:Nacionalidad,:NombreUsuario,:Contrasenia,
            :DocIdentificacion,:NumeroDocumento,:Activo)");
            $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
            $stmt->bindParam(":Direccion", $datos["Direccion"], PDO::PARAM_STR);
            $stmt->bindParam(":Telefono", $datos["Telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":IdCargoEmpleado", $datos["IdCargoEmpleado"], PDO::PARAM_STR);
            $stmt->bindParam(":Nacionalidad", $datos["Nacionalidad"], PDO::PARAM_STR);
            $stmt->bindParam(":NombreUsuario", $datos["NombreUsuario"], PDO::PARAM_STR);
            $stmt->bindParam(":Contrasenia", $datos["Contrasenia"], PDO::PARAM_STR);
            $stmt->bindParam(":DocIdentificacion", $datos["DocIdentificacion"], PDO::PARAM_STR);
            $stmt->bindParam(":NumeroDocumento", $datos["NumeroDocumento"], PDO::PARAM_STR);
            $stmt->bindParam(":Activo", $datos["Activo"], PDO::PARAM_STR);

            if ($stmt->execute()) {
                return "ok";
                $stmt = null;
            } else {
                $databaseErrors = $stmt->errorInfo();
                print_r($databaseErrors);
                return "Ocurrio un error";
            }
        } catch (Exception $ex) {
            print_r($ex);
            return $ex;
        }

        $stmt = null;
    }
}
?>