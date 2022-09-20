<?php
class clsControlArrayListUM
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarUM()
    {
        $respuesta = clsModelListUM::medModelListUM();
        return $respuesta;
    }

}

?>