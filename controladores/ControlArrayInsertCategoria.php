<?php
class clsControlArrayCategoria
{
    /* Guardar Documento de Emision */
    static public function medControlArrayCategoria()
    {
        if(isset($_POST["btnagregarcategoria"]))
        {
            $tabla="categoriaproducto";


            $datos=array( "Nombre" => $_POST["txtcategoriac"]);

            $respuesta = clsModelInsertCategoria::medModelInsertCategoria($tabla,$datos);

            return $respuesta;
        }
    }
}

?>