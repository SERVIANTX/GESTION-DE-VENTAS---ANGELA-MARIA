<?php
class clsControlArrayListProducto
{

    /* Seleccionar Producto */
    static public function medSeleccionarProducto()
    {
        $respuesta = clsModelListProducto::medModelListProducto();
        return $respuesta;
    }

}
?>