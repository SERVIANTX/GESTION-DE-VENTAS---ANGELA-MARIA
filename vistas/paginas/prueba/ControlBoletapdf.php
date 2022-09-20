<?php

class clsControlNumeroBoletapdf
{
    /* Seleccionar Producto */
    static public function medControlNumeroBoletapdf()
    {
        $respuesta = clsModelNumeroBoletapdf::medModelNumeroBoletapdf();
        return $respuesta;
    }
    
}
?>