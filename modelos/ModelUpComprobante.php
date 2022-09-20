<?php
require_once "conexion.php";
class clsModelUpdateComprobanteAc
{
    static public function medModelUpdateComprobanteAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE comprobanteventa SET Nombre=:Nombrex,NumeroBalotario=:Serie,NumeroSerie=:Numero WHERE IdComprobanteVenta =:Idcompro ");
        $stmt->bindParam(":Nombrex",$datos["Nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":Serie",$datos["Serie"],PDO::PARAM_STR);
        $stmt->bindParam(":Numero",$datos["Num"],PDO::PARAM_STR);
        $stmt->bindParam(":Idcompro",$datos["IdCromprobante"],PDO::PARAM_STR);


        if($stmt->execute())
        {
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