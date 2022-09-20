<?php

class clsControlArrayReporteProducto
{
    /* Seleccionar Producto */
    static public function medReporteProducto()
    {
        $respuesta = clsModelReporteProducto::medModelReporteProducto();
        return $respuesta;
    }
}
?>