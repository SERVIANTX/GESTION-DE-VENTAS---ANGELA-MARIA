<?php
class clsControlArrayEntrada
{
    static public function medControlArrayEntrada()
    {
        if(isset($_POST["btnguardarentrada"]))
        {
            $tabla1="documentoentrada";
            

           $datos1=array(
                "IdProveedor" => $_POST["txtentradaproveedor"], 
                "FechaCompra" => $_POST["txtentradafechacompra"],
                "NumeroDocumento" => $_POST["txtentradanumerodocumento"],
            "IdEmpleado" => $_POST["txtentradaempleado"],
            "IdDocumentoEmision" => $_POST["txtentradatipoducmento"]);
          




            $tabla2="detalledocumentoentrada";


            
                $producto= $_POST["txtentradaproducto"];
                $cantidad= $_POST["txtentradacantidad"];
                $lote= $_POST["txtentradalote"];
                $precicompra= $_POST["txtentradapreciocompra"];
                $preciventa= $_POST["txtentradaprecioventa"];
                $fecha= $_POST["txtentradafechavencimiento"];
                $queda= $_POST["txtentradacantidad"];
             
             






               
                $respuesta = clsModelInsertEntrada::medModelInsertEntrada($tabla1,$datos1,$tabla2,$producto,$cantidad,$lote,$precicompra,$preciventa,$fecha,$queda);

            return $respuesta;
          
            

        }

    }

}



?>