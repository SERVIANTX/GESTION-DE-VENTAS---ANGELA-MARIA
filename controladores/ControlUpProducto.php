<?php
class clsControlUpdateProductoAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateProductoAc()
    {
        if(isset($_POST["btnActualizarProducto"]))
        {


            $datos=array(
            "Marca" => $_POST["txtactualizarmarca"],
            "Nombre" => $_POST["txtactualizarnombre"],
            "Categoria" => $_POST["txtactualizarcategoria"],
             "UnidadM" => $_POST["txtactualizarunidadmedida"],
            "Idproducto" => $_POST["txtactualizaridprod"] );

                $respuesta = clsModelUpdateProductoAc::medModelUpdateProductoAc($datos);
            return $respuesta;


        }
    }
}

?>