<?php
class clsControlArrayEmpleado
{
    /* Guardar Empleado */
    static public function medControlArrayEmpleado()
    {
        if(isset($_POST["btnGuardarEmpleado"]))
        {
            $tabla="empleado";

            $datos=array(
                "Nombre" => $_POST["txtnombre"], 
                "Apellido" => $_POST["txtapellido"],
                "Direccion" => $_POST["txtdireccion"],
                "Telefono" => $_POST["txttelefono"], 
                "IdCargoEmpleado" => $_POST["txtcargoempleado"],
                "Nacionalidad" => $_POST["txtnacionalidad"], 
                "NombreUsuario" => $_POST["txtnombreusuario"],
                "Contrasenia" => $_POST["txtcontraseña"],
                "DocIdentificacion" => $_POST["txtdocidentificacion"],
                "NumeroDocumento" => $_POST["txtnumdocumento"], 
                "Activo" => "SI");
                $respuesta = clsModelInsertEmpleado::medModelInsertEmpleado($tabla,$datos);
            return $respuesta;

        }
    }
  


}
?>