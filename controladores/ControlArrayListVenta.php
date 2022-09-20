<?php
class clsControlArrayListVenta
{


    static public function medControlArrayListVenta()
    {       



        if(isset($_POST["btnbuscarproductokardex"]))
        {
            

            $datos=array("Productokardex" => $_POST["txtproductokardex"]);
          


                $respuesta = clsModelListKardexVenta::medModelListKardexVenta($datos);

            return $respuesta;

        }
   
    }

}
?>