<?php
class clsControlArrayCargo
{
    static public function medControlArrayCargo()
    {
        if(isset($_POST["btnGuardarcargoempleado"]))
        {
            $tabla="cargoempleado";

        $datos=array(
        "Nombre" => $_POST["txtcargo"]);

                $respuesta = clsModelInsertCargo::medModelInsertCargo($tabla,$datos);

            return $respuesta;
        }
    }
}

?>