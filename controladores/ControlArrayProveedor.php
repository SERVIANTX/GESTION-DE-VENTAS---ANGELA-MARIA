<?php
class clsControlArrayProveedor
{
    /* Guardar Proveedor */
    static public function medControlArrayProveedor()
    {
        if(isset($_POST["btnGuardarProveedor"]))
        {
            $tabla="proveedor";


            $datos=array(
            "NombreEmpresa" => $_POST["txtempresa"],
            "RUC" => $_POST["txtruc"],
            "Telefono" => $_POST["txttelefono"],
            "Direccion" => $_POST["txtdireccion"],
            "Correo" => $_POST["txtcorreo"] );

                $respuesta = clsModelInsertProveedor::medModelInsertProveedor($tabla,$datos);

            return $respuesta;

        }
    }
}

?>