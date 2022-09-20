<?php
class clsControlArrayListSalida
{


    static public function medControlArrayListSalida()
    {       



        if(isset($_POST["btnbuscarproductokardex"]))
        {
            

            $datos=array("Productokardex" => $_POST["txtproductokardex"]);
          


                $respuesta = clsModelListKardexSalida::medModelListKardexSalida($datos);

            return $respuesta;

        }
   
    }

}
?>