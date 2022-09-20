<?php
require_once "conexion.php";
class clsModelInsertEntrada
{
 static public function medModelInsertEntrada($tabla1,$datos1,$tabla2,$producto,$cantidad,$lote,$precicompra,$preciventa,$fecha,$queda)
 {

    $con=conexion::conectar();
    $stmt = $con->prepare("INSERT INTO $tabla1 (IdProveedor,FechaCompra,NumeroDocumento,IdEmpleado,IdDocumentoEmision) VALUES (:proveedor,:fecha,:numerodocumento,:empleado,:documentoemision)");
        $stmt->bindParam(":proveedor",$datos1["IdProveedor"],PDO::PARAM_STR);
        $stmt->bindParam(":fecha",$datos1["FechaCompra"],PDO::PARAM_STR);
        $stmt->bindParam(":numerodocumento",$datos1["NumeroDocumento"],PDO::PARAM_STR);
        $stmt->bindParam(":empleado",$datos1["IdEmpleado"],PDO::PARAM_STR);
        $stmt->bindParam(":documentoemision",$datos1["IdDocumentoEmision"],PDO::PARAM_STR);


        if($stmt->execute())
        {
            




          

            $id=$con->lastInsertId(); 
          

            $varinsert="INSERT INTO $tabla2 (PrecioCompra,CantidadComprada,IdDocumentoEntrada,Lote,FechaVencimiento,IdProducto,PrecioVenta,QuedaCantidad) VALUES";



            for ($i=0; $i < count($producto) ; $i++)
             { 
         
                $varinsert.="('".$precicompra[$i]."','".$cantidad[$i]."','".$id."','".$lote[$i]."','".$fecha[$i]."','".$producto[$i]."','".$preciventa[$i]."','".$queda[$i]."'),";

                
                $kardex="CALL SP_KardexEntrada (";
                $kardex.= "'".$precicompra[$i]."','".$preciventa[$i]."','".$producto[$i]."','".$cantidad[$i]."')";
               
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