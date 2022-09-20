<?php
class clsControlArrayListComprobanteAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarComprobanteAc($varid)
    {
        $respuesta = clsModelListComprobanteAc::medModelListComprobanteAc($varid);
        return $respuesta;
    }

}

?>  