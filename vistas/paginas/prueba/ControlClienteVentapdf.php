<?php

class clsControlClienteVentapdf
{
    static public function medControlClienteVentapdf()
    {
        $respuesta = clsModelClienteVentapdf::medModelClienteVentapdf();
        return $respuesta;
    }
    
}
?>