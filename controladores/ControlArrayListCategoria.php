<?php
class clsControlArrayListCategoria
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarCategoria()
    {
        $respuesta = clsModelListCategoria::medModelListCategoria();
        return $respuesta;
    }

}

?>