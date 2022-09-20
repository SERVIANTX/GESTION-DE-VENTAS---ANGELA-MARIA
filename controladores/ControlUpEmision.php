<?php
class clsControlUpdateEmisionAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateEmisionAc()
    {
        if(isset($_POST["btnActualizarEmision"]))
        {


            $datos=array( "Nombre" => $_POST["txtactualizaremision"],
             "Idemision" => $_POST["txtidemision"]);

                $respuesta = clsModelUpdateEmisionAc::medModelUpdateEmisionAc($datos);
            return $respuesta;


        }
    }
}

?>