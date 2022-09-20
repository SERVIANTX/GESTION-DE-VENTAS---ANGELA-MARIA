
<?php
class clsControlArraySalida
{
     /* Guardar Salida */
    static public function medControlArraySalida()
    {
        if(isset($_POST["btnguardarsalida"]))
        {
            $tabla1="documentosalida";

            $datos1=array(
                "FechaSalida" => $_POST["txtsalidadocfecha"],
                "NumeroDocumento" => $_POST["txtnumdocumentosalida"],
                "Idempleado" => $_POST["txtempleadosalida"],
                "TipoDocumentoEmision" => $_POST["txtemisionsalida"],
                "Motivo" => $_POST["txtmotivo"]);

            $tabla2="detalledocumentosalida";

                $producto= $_POST["txtsalidaproducto"];
                $cantidad= $_POST["txtsalidacantidad"];
                $lote= $_POST["txtsalidalote"];
                $precio= $_POST["txtsalidaprecio"];
                $fecha= $_POST["txtsalidafecha"];

                $respuesta = clsModelInsertSalida::medModelInsertSalida($tabla1,$datos1,$tabla2,$producto,$cantidad,$lote,$precio,$fecha);

            return $respuesta;
        }
    }
}

?>