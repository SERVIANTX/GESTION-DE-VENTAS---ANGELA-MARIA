<?php

class clsControlArrayReporteKardex
{
    /* Seleccionar Producto */
    static public function medReporteKardex()
    {
        $respuesta = clsModelReporteKardex::medModelReporteKardex();
        return $respuesta;
    }
}
?>