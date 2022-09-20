<?php
class clsControlArrayEmision
{
    /* Guardar Documento de Emision */
    static public function medControlArrayEmision()
    {
        if(isset($_POST["btnagregaremision"]))
        {
            $tabla="documentoemision";


            $datos=array( "Nombre" => $_POST["txtemisionagregar"]);

            $respuesta = clsModelInsertEmision::medModelInsertEmision($tabla,$datos);

            return $respuesta;
        }
    }
}

?>