<?php
class clsControlArrayListCargoAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarCargoAc($varid)
    {
        $respuesta = clsModelListCargoAc::medModelListCargoAc($varid);
        return $respuesta;
    }

}

?>