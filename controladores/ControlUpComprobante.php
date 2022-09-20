
<?php
class clsControlUpdateComprobanteAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateComprobanteAc()
    {
        if(isset($_POST["btnActualizarCrompobante"]))
        {


            $datos=array(
            "Nombre" => $_POST["txtactualizarnombre"],
            "Serie" => $_POST["txtactualizarserie"],
            "Num" => $_POST["txtactualizarnum"],
            "IdCromprobante" => $_POST["txtidComprobanteVenta"] );

                $respuesta = clsModelUpdateComprobanteAc::medModelUpdateComprobanteAc($datos);
            return $respuesta;


        }
    }
}

?>