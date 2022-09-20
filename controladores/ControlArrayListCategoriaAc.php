<?php
class clsControlArrayListCategoriaAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarCategoriaAc($varid)
    {
        $respuesta = clsModelListCategoriaAc::medModelListCategoriaAc($varid);
        return $respuesta;
    }

}

?>