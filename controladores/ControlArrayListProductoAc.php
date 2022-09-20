<?php
class clsControlArrayListProductoAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarProductoAc($varid)
    {
        $respuesta = clsModelListProductoAc::medModelListProductoAc($varid);
        return $respuesta;
    }

}

?>