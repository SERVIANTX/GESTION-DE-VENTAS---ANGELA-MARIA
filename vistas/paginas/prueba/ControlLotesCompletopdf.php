<?php

class clsControlArrayReporteFecha
{
    /* Seleccionar Producto */
    static public function medReporteFecha()
    {
        $respuesta = clsModelReporteFecha::medModelReporteFecha();
        return $respuesta;
    }
}
?>