<?php
class clsControlArrayListProveedorAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarProveedorAc($varid)
    {
        $respuesta = clsModelListProveedorAc::medModelListProveedorAc($varid);
        return $respuesta;
    }

}

?>