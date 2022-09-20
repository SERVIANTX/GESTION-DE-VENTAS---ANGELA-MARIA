<?php

class clsControlArrayReporteProductoMasVendido
{
    /* Seleccionar Producto */
    static public function medReporteProductoMasVendido()
    {
        $respuesta = clsModelReporteProductoMasVendido::medModelReporteProductoMasVendido();
        return $respuesta;
    }
}
?>