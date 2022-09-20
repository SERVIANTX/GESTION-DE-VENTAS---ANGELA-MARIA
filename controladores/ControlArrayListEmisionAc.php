<?php
class clsControlArrayListemisionAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionaremisionAc($varid)
    {
        $respuesta = clsModelListemisionAc::medModelListemisionAc($varid);
        return $respuesta;
    }

}

?>