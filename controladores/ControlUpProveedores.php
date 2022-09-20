<?php
class clsControlUpdateProveedorAc
{
    /* Guardar Proveedor */
    static public function medControlUpdateProveedorAc()
    {
        if(isset($_POST["btnActualizarProveedor"]))
        {


            $datos=array(
            "NombreEmpresa" => $_POST["txtactualizarempresa"],
            "RUC" => $_POST["txtactualizarruc"],
            "Telefono" => $_POST["txtactualizartelefono"],
            "Direccion" => $_POST["txtactualizardireccion"],
            "Correo" => $_POST["txtactualizarcorreo"] ,
            "IdProveedor" => $_POST["txtidproveedor"] );

                $respuesta = clsModelUpdateProveedorAc::medModelUpdateProveedorAc($datos);
            return $respuesta;

        }
    }
}

?>