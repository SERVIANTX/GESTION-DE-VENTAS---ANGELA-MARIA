<?php
require_once "conexion.php";
class clsModelUpdateProductoAc
{
    static public function medModelUpdateProductoAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE producto SET Marca=:marca, Nombre=:nombre, IdUnidadMedida=:unidad, IdCategoriaProducto=:categoria WHERE IdProducto =:idproduc ");
        $stmt->bindParam(":marca",$datos["Marca"],PDO::PARAM_STR);
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":categoria",$datos["Categoria"],PDO::PARAM_STR);
        $stmt->bindParam(":unidad",$datos["UnidadM"],PDO::PARAM_STR);
        $stmt->bindParam(":idproduc",$datos["Idproducto"],PDO::PARAM_STR);

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