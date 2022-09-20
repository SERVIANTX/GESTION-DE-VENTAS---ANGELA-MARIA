<?php
require_once "conexion.php";
class clsModelInsertSalida
{
    static public function medModelInsertSalida($tabla1,$datos1,$tabla2,$producto,$cantidad,$lote,$precio,$fecha)
    {

        $con=conexion::conectar();
        $stmt = $con->prepare("INSERT INTO $tabla1 (FechaSalida,NumeroDocumento,Idempleado,TipoDocumentoEmision,Motivo) VALUES (:fechasalida,:numerodocumento,:idempleado,:tipodocumento,:motivo)");
        $stmt->bindParam(":fechasalida",$datos1["FechaSalida"],PDO::PARAM_STR);
        $stmt->bindParam(":numerodocumento",$datos1["NumeroDocumento"],PDO::PARAM_STR);
        $stmt->bindParam(":idempleado",$datos1["Idempleado"],PDO::PARAM_STR);
        $stmt->bindParam(":tipodocumento",$datos1["TipoDocumentoEmision"],PDO::PARAM_STR);
        $stmt->bindParam(":motivo",$datos1["Motivo"],PDO::PARAM_STR);


        if($stmt->execute())
        {

            $id=$con->lastInsertId();

            $varinsert="INSERT INTO $tabla2 (Cantidad,IdDocumentoSalida,Lote,PrecioVenta,FechaVencimiento,IdProducto) VALUES";

            for ($i=0; $i < count($producto) ; $i++) {

               
                $varinsert.="('".$cantidad[$i]."','".$id."','".$lote[$i]."','".$precio[$i]."','".$fecha[$i]."','".$producto[$i]."'),";

                $kardex="CALL SP_KardexSalida (";
                $kardex.= "'".$producto[$i]."','".$cantidad[$i]."')";
               
                $stmt7 = conexion::conectar()->prepare($kardex);
                $stmt7->execute();
             
                $stmt7 = null;
            }
            $varinsertfinal= substr($varinsert,0,-1);

                    $stmt1 = conexion::conectar()->prepare($varinsertfinal);

                        if($stmt1->execute())
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