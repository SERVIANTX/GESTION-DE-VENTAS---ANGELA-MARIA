<?php
class clsControlArrayListUMAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarUMAc($varid)
    {
        $respuesta = clsModelListUMAc::medModelListUMAc($varid);
        return $respuesta;
    }

}

?>