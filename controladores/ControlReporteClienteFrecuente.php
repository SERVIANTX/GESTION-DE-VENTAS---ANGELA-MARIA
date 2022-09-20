<?php

class clsControlArrayReporteClienteFrecuente
{
    /* Seleccionar Producto */
    static public function medReporteClienteFrecuente()
    {
        $respuesta = clsModelReporteClienteFrecuente::medModelReporteClienteFrecuente();
        return $respuesta;
    }
}
?>