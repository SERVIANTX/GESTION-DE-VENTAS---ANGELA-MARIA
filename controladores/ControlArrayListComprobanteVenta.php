<?php
class clsControlArrayListComprobante
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarComprobante()
    {
        $respuesta = clsModelListComprobante::medModelListComprobante();
        return $respuesta;
    }

}

?>