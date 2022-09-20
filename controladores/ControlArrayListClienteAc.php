<?php
class clsControlArrayListClienteAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarClienteAc($varid)
    {
        $respuesta = clsModelListClienteAc::medModelListClienteAc($varid);
        return $respuesta;
    }

}

?>