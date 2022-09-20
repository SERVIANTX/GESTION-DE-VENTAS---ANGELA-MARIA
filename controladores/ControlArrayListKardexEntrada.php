<?php
class clsControlArrayListKardexEntrada
{


    static public function medControlArrayListKardexEntrada()
    {       



        if(isset($_POST["btnbuscarproductokardex"]))
        {
            

            $datos=array("Productokardex" => $_POST["txtproductokardex"]);
          


                $respuesta = clsModelListKardexEntrada::medModelListKardexEntrada($datos);

            return $respuesta;

        }
   
    }

}
?>