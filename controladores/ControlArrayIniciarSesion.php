<?php
class clsControlArrayIniciarSecion
{
   

        static public function medArrayInicarSesion()
        {
            if(isset($_POST["btnentrar"]))
            {

                $tabla = "empleado";
                $datos = array("NombreUsuario" => $_POST["txtusuario"],
                            "Contrasenia"=> $_POST["txtcontra"]);

                            list ($respuesta4,$respuesta1, $respuesta2, $respuesta3) = clsModSelectLogin::medConsultaSelectIniciarSesion($tabla,$datos);
                return array($respuesta4,$respuesta1,$respuesta2,$respuesta3);
            }

        }
}