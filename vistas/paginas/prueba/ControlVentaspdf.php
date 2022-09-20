<?php
class clsControlArrayListVenta
{
    static public function medSeleccionarVenta()
    {
        $respuesta = clsModelListVenta::medModelListVenta();
        return $respuesta;
    }

}
?>