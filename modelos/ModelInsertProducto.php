<?php
require_once "conexion.php";
class clsModelInsertProducto
{
    static public function medModelInsertProducto($tabla,$datos)
    {

        $con=conexion::conectar();
        $stmt = $con->prepare("INSERT INTO $tabla (Marca,Nombre,IdUnidadMedida,IdCategoriaProducto) VALUES (:marca,:nombre,:unidad,:categoria)");
        $stmt->bindParam(":marca",$datos["Marca"],PDO::PARAM_STR);
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":categoria",$datos["Categoria"],PDO::PARAM_STR);
        $stmt->bindParam(":unidad",$datos["UnidadM"],PDO::PARAM_STR);


        if($stmt->execute())
        {

            $id=$con->lastInsertId(); 

            $stmt1 = $con->prepare("INSERT INTO kardex (
  
                `PrecioCompraUltimo`,
                `PrecioVenta`,
                `StockMinimo`,
                `CantidadEntrada`,
                `CantidadSalida`,
                `IdProducto`
              )
              VALUES
                (
                  
                  '0',
                  '0',
                  '0',
                  '0',
                  '0',
                  '$id'
                )");
                $stmt1->execute();

            return "ok";
            $stmt->close();
            $stmt = null;

        }
        else
        {
            print_r(conexion::conectar()->errorInfo);
            $stmt->close();
            $stmt = null;
        }
    }
}

?>