<?php
class clsControlArrayListKardexLote
{


    static public function medControlArrayListKardexLote()
    {       



        if(isset($_POST["btnbuscarproductokardex"]))
        {
            

            $datos=array("Productokardex" => $_POST["txtproductokardex"]);
          


                $respuesta = clsModelListKardexLote::medModelListKardexLote($datos);

            return $respuesta;

        }
   
    }

}
?>