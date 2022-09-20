<?php
class clsControlUpdateCategoriaAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateCategoriaAc()
    {
        if(isset($_POST["btnActualizarCategoria"]))
        {


            $datos=array( "Nombre" => $_POST["txtactualizarcategoriac"],
             "IdCategoria" => $_POST["txtidCategoria"]);

                $respuesta = clsModelUpdateCategoriaAc::medModelUpdateCategoriaAc($datos);
            return $respuesta;


        }
    }
}

?>