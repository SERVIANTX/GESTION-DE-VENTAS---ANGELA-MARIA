<?php
require_once "conexion.php";
class clsModelInsertVenta
{
    static public function medModelInsertVenta($tabla1,$datos1,$tabla2,$producto,$cantidad,$lote,$precio,$importe,$fechasalida)
    {

        $con=conexion::conectar();
        $stmt = $con->prepare("INSERT INTO $tabla1 (IdCliente,FechaEmision,IdEmpleado,IdcomprobanteVenta,Devolucion,NumeroDocumentoVenta) VALUES (:cliente,:fecha,:idempleado,:idcomprobante,:devolucion,:numerodocumento)");
        $stmt->bindParam(":cliente",$datos1["IdCliente"],PDO::PARAM_STR);
        $stmt->bindParam(":fecha",$datos1["FechaEmision"],PDO::PARAM_STR);
        $stmt->bindParam(":idempleado",$datos1["IdEmpleado"],PDO::PARAM_STR);
        $stmt->bindParam(":idcomprobante",$datos1["IdcomprobanteVenta"],PDO::PARAM_STR);
        $stmt->bindParam(":devolucion",$datos1["Devolucion"],PDO::PARAM_STR);
        $stmt->bindParam(":numerodocumento",$datos1["NumeroDocumentoVenta"],PDO::PARAM_STR);


        $consalida=conexion::conectar();
        $stmtsalida = $consalida->prepare("INSERT INTO documentosalida (FechaSalida,NumeroDocumento,Idempleado,TipoDocumentoEmision,Motivo) VALUES (:fechasalida,:numerodocumentosalida,:idempleadosalida,'BOLETA','VENTA')");
        $stmtsalida->bindParam(":fechasalida",$datos1["FechaEmision"],PDO::PARAM_STR);
        $stmtsalida->bindParam(":numerodocumentosalida",$datos1["NumeroDocumentoVenta"],PDO::PARAM_STR);
        $stmtsalida->bindParam(":idempleadosalida",$datos1["IdEmpleado"],PDO::PARAM_STR);
        
        



        if($stmt->execute() && $stmtsalida->execute())
        {
            $id=$con->lastInsertId();
            $idsalida=$consalida->lastInsertId();

            $varinsert="INSERT INTO $tabla2 (CantidadProducto,Idventa,IdProducto,PrecioUnitario,Importe,Lote) VALUES";
            $varinsertsalida ="INSERT INTO detalledocumentosalida (Cantidad,IdDocumentoSalida,Lote,PrecioVenta,FechaVencimiento,IdProducto) VALUES";

            for ($i=0; $i < count($producto) ; $i++) 
            {
                $varinsert.="('".$cantidad[$i]."','".$id."','".$producto[$i]."','".$precio[$i]."','".$importe[$i]."','".$lote[$i]."'),";

                $varinsertsalida.="('".$cantidad[$i]."','".$idsalida."','".$lote[$i]."','".$precio[$i]."','".$fechasalida[$i]."','".$producto[$i]."'),";

                $kardex="CALL SP_KardexSalida (";
                $kardex.= "'".$producto[$i]."','".$cantidad[$i]."')";
               
                $stmt7 = conexion::conectar()->prepare($kardex);
                $stmt7->execute();
             
                $stmt7 = null;
            }


            $varinsertfinal= substr($varinsert,0,-1);
            $varinsertsalidafinal= substr($varinsertsalida,0,-1);
                    $stmt1 = conexion::conectar()->prepare($varinsertfinal);
                    $stmt9 = conexion::conectar()->prepare($varinsertsalidafinal);

                    $numero = conexion::conectar()->prepare("UPDATE
                    comprobanteventa
                  SET
                    NumeroSerie = NumeroSerie + 1
                  WHERE `IdComprobanteVenta` = '1';");
                  $numero->execute();


                        if($stmt1->execute() && $stmt9->execute()  )
                                {
                                    return "ok";
                                }
                                else
                                {
                                    print_r(conexion::conectar()->errorInfo);
                                }
        }
        else
        {
            print_r(conexion::conectar()->errorInfo);
        }


    }
}



?>