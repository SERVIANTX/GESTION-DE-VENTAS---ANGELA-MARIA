<?php
class clsControlArrayVentaFechas
{
    static public function medControlArrayVentaFechas()
    {       
        if(isset($_POST["btnbuscarFechasVentas"]))
        {
            $datos=array("FechaInicio" => $_POST["txtfechaini"],
                            "FechaFin" => $_POST["txtfechafin"]);
          
                $respuesta = clsModelListVentaFechas::medModelListVentaFechas($datos);

            return $respuesta;

        }
   
    }

}
?>
