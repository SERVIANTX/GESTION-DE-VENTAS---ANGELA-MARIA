<?php
class clsControlUpdateEmpleado
{
    static public function medControlUpdateEmpleado()
    {
        if(isset($_POST["btnActualizarEmpleado"]))
        {
            $datos=array(
                "Nombre" => $_POST["txtactualizarnombre"], 
                "Apellido" => $_POST["txtactualizarapellido"],
                "Direccion" => $_POST["txtactualizardireccion"],
                "Telefono" => $_POST["txtactualizartelefono"], 
                "IdCargoEmpleado" => $_POST["txtcargoactuempleado"],
                "Nacionalidad" => $_POST["txtactualizarnacionalidad"], 
                "NombreUsuario" => $_POST["txtactualizarnombreusuario"],
                "Contrasenia" => $_POST["txtactualizarcontrasenia"],
                "DocIdentificacion" => $_POST["txtactualizardocidentificacion"],
                "NumeroDocumento" => $_POST["txtactualizarnumdocumento"],
                "Activo" => $_POST["txtactualizarEstado"],
                "IdEm" => $_POST["txtactualizarempleado"]);
                $respuesta = clsModelUpdateEmpleado::medModelUpdateEmpleado($datos);
            return $respuesta;

        }
    }
  


}
?>