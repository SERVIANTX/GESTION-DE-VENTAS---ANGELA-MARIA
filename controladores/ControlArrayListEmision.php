<?php
class clsControlArrayListemision
{

    /* Seleccionar Proveedor */
    static public function medSeleccionaremision()
    {
        $respuesta = clsModelListemision::medModelListemision();
        return $respuesta;
    }

}

?>