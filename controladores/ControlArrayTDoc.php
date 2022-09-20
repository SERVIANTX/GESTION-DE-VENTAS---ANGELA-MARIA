<?php
class clsControlArrayTDoc
{
    /* Guardar Tipo Documento */
    static public function medControlArrayTDoc()
    {
        if(isset($_POST["btnGuardarTDoc"]))
        {
            $tabla="documentoidentificacion";

            $datos=array(
            "Nombre" => $_POST["txtnombreTDoc"]);

                $respuesta = clsModelInsertTDoc::medModelInsertTDoc($tabla,$datos);

            return $respuesta;

        }
    }
}

?>