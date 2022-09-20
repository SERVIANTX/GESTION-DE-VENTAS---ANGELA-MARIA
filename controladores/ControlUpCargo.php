<?php
class clsControlUpdateCargoAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateCargoAc()
    {
        if(isset($_POST["btnActualizarCargo"]))
        {


            $datos=array( "Nombre" => $_POST["txtactualizarcargo"],
             "IdCargo" => $_POST["txtidCargo"]);

                $respuesta = clsModelUpdateCargoAc::medModelUpdateCargoAc($datos);
            return $respuesta;


        }
    }
}

?>