<?php
class clsControlArrayUnidadMedida
{
    /* Guardar Documento de Emision */
    static public function medControlArrayUnidadMedida()
    {
        if(isset($_POST["btnagregarunidad"]))
        {
            $tabla="unidadmedida";


            $datos=array( "Nombre" => $_POST["txtunidad"]);

            $respuesta = clsModelInsertUnidadMedida::medModelInsertUnidadMedida($tabla,$datos);

            return $respuesta;
        }
    }
}

?>