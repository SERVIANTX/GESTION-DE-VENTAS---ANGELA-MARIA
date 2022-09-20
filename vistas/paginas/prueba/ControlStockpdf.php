<?php

class clsControlArrayReporteStock
{
    /* Seleccionar Producto */
    static public function medReporteStock()
    {
        $respuesta = clsModelReporteStock::medModelReporteStock();
        return $respuesta;
    }
}
?>