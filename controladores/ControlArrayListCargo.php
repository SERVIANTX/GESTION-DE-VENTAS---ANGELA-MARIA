<?php
class clsControlArrayListCargo
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarCargo()
    {
        $respuesta = clsModelListCargo::medModelListCargo();
        return $respuesta;
    }

}

?>