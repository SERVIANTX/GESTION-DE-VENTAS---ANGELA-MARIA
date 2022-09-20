<?php
class clsControlArrayListLotes
{
    static public function medControlArrayListLotes()
    {       
        if(isset($_POST["btnbuscarFechasVencimiento"]))
        {
            $datos=array("FechaInicio" => $_POST["txtfechaini"],
                            "FechaFin" => $_POST["txtfechafin"]);
          
                $respuesta = clsModelListFechaLote::medModelListFechaLote($datos);

            return $respuesta;

        }
   
    }

}
?>
