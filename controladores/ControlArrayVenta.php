<?php
class clsControlArrayVenta
{
    static public function medControlArrayVenta()
    {
        if(isset($_POST["btnguardarventa"]))
        {
            $tabla1="venta";


            $datos1=array(
                "IdCliente" => $_POST["txtventacliente"],
                "FechaEmision" => $_POST["txtventafecha"],
                "IdEmpleado" => $_POST["txtventaempleado"],
            "IdcomprobanteVenta" => $_POST["txtventatipocomprobante"],
            "Devolucion" => "NO",
            "NumeroDocumentoVenta" => $_POST["txtventanuemrocomprobante"]);
            

            $tabla2="detalleventa";

                $producto= $_POST["txtidproventa"];
                $cantidad= $_POST["txtventacantidad"];
                $lote= $_POST["txtventalote"];
                $precio= $_POST["txtventaprecio"];
                $importe= $_POST["txtventaimporte"];
                $fechasalida = $_POST["txtsalidaventafecha"];

                $respuesta = clsModelInsertVenta::medModelInsertVenta($tabla1,$datos1,$tabla2,$producto,$cantidad,$lote,$precio,$importe,$fechasalida);

            return $respuesta;
        }
    }
}

?>