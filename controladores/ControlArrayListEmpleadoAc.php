<?php
class clsControlArrayListEmpleadoAc
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarEmpleadoAc($varid)
    {
        $respuesta = clsModelListEmpleadoAc::medModelListEmpleadoAc($varid);
        return $respuesta;
    }

}

?>