<?php
class clsControlArrayComprobanteVenta
{
    /* Guardar Comprobante de Venta */
    static public function medControlArrayComprobanteVenta()
    {
        if(isset($_POST["btnagregarcomprobante"]))
        {
            $tabla="comprobanteventa";


            $datos=array( "Nombre" => $_POST["txtcomprobante"],
                             "serie" => $_POST["txtserie"],
                            "Numero" => $_POST["txtnumero"]);

            $respuesta = clsModelInsertComprobanteVenta::medModelInsertComprobanteVenta($tabla,$datos);

            return $respuesta;
        }
    }
}

?>