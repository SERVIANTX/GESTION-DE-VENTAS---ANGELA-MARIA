<?php
class clsControlArrayEstadoCivi
{
    /* Guardar Estado Civil */
    static public function medControlArrayEstadoCivi()
    {
        if(isset($_POST["btnGuardarEtadoCivil"]))
        {
            $tabla="estadocivil";

            $datos=array(
            "Nombre" => $_POST["txtEstadoCivil"]);


                $respuesta = clsModelInsertEstadoCivi::medModelInsertEstadoCivi($tabla,$datos);

            return $respuesta;
        }
    }
}

?>