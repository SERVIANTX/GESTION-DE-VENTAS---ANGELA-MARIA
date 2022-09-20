<?php
require_once "conexion.php";

class clsModSelectLogin
{
    static public function medConsultaSelectIniciarSesion($tabla,$datos)
    {
        $stmt = conexion::conectar()->prepare("SELECT e.IdEmpleado , CONCAT_WS(' ', e.Nombre, e.Apellido) AS emple, ce.Nombre AS cargo FROM $tabla AS e INNER JOIN cargoempleado AS ce
        ON e.IdCargoEmpleado = ce.IdCargoEmpleado WHERE NombreUsuario = :nombre AND Contrasenia = :contra");
        $stmt->bindParam(":nombre",$datos["NombreUsuario"],PDO::PARAM_STR);
        $stmt->bindParam(":contra",$datos["Contrasenia"],PDO::PARAM_STR);

        if($stmt->execute())
        { 
            $arraycargoempleado= array();
            $arraynombreempleado= array();
            $arrayidempleado= array();
  

          
            
                $usuario=$stmt->fetch(PDO::FETCH_ASSOC);
           
            


            if($usuario==true)
            {
                 
               array_push($arraycargoempleado,$usuario['cargo']);
               array_push($arraynombreempleado,$usuario['emple']);
               array_push($arrayidempleado,$usuario['IdEmpleado']);
                return array ($arrayidempleado,$arraycargoempleado, $arraynombreempleado, "ok"); 
               
                $stmt->close();
                $stmt = null;
            }
            else
            {
                return array ($arrayidempleado,$arraycargoempleado, $arraynombreempleado, "no"); 
                $stmt->close();
                $stmt = null;
            }

        }
        else
        {
            print_r(conexion::conectar()->errorInfo);
        }
    }
}

?>