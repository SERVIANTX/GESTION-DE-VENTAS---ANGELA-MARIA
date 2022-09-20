<?php

class clsControlArrayReporteEmpleado
{
    /* Seleccionar Producto */
    static public function medReporteEmpleado()
    {
        $respuesta = clsModelReporteEmpleado::medModelReporteEmpleado();
        return $respuesta;
    }
}
?>