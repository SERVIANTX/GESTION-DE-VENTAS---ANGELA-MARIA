<?php
class clsControlArrayProducto
{
    /* Guardar Proveedor */
    static public function medControlArrayProducto()
    {
        if(isset($_POST["btnGuardarProducto"]))
        {
            $tabla="producto";


            $datos=array(
            "Marca" => $_POST["txtMarca"],
            "Nombre" => $_POST["txtNombreproducto"],
            "Categoria" => $_POST["txtentradacategoria"],
            "UnidadM" => $_POST["txtunidadmedida"]);

                $respuesta = clsModelInsertProducto::medModelInsertProducto($tabla,$datos);

            return $respuesta;

        }
    }
}

?>
