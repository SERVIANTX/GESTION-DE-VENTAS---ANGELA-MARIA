<?php
class clsControlArrayCliente
{
    /* Guardar Cliente */
    static public function medControlArrayCliente()
    {
        if(isset($_POST["btnGuardarventaCliente"]))
        {
            $tabla="cliente";

            $datos=array(
                "RazonSocial" => $_POST["txtrazonsocial"],
            "Direccion" => $_POST["txtdireccioncliente"],
            "RucDNI" => $_POST["txtruccliente"]);


                $respuesta = clsModelInsertCliente::medModelInsertCliente($tabla,$datos);

            return $respuesta;

        }
    }


    /* Seleccionar Cliente */
    static public function medSeleccionarCliente()
    {
        $tabla = "cliente";
        $respuesta = clsModelInsertCliente::medModelSeleccionarCliente($tabla);
        return $respuesta;
    }
}

?>