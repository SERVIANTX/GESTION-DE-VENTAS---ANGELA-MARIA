<?php
class clsControlUpdateUMAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateUMAc()
    {
        if(isset($_POST["btnActualizarUM"]))
        {


            $datos=array( "Nombre" => $_POST["txtactualizarUnidad"],
             "IdUnidad" => $_POST["txtidUM"]);

                $respuesta = clsModelUpdateUMAc::medModelUpdateUMAc($datos);
            return $respuesta;


        }
    }
}

?>