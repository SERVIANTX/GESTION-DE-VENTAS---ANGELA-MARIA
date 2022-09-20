<?php
class clsControlArrayListProveedor
{

    /* Seleccionar Proveedor */
    static public function medSeleccionarProveedor()
    {
        $tabla = "proveedor";
        $respuesta = clsModelListProveedor::medModelListProveedor($tabla);
        return $respuesta;
    }

}

?>