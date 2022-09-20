<?php
class clsControlUpdateClienteAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateClienteAc()
    {
        if(isset($_POST["btnActualizarCliente"]))
        {


            $datos=array(
            "Razon" => $_POST["txtactualizarrazonsocial"],
            "Direc" => $_POST["txtactualizardirec"],
            "Ruc" => $_POST["txtactualizarRUCDNI"],
            "IdCliente" => $_POST["txtidcliente"] );

                $respuesta = clsModelUpdateClienteAc::medModelUpdateClienteAc($datos);
            return $respuesta;


        }
    }
}

?>