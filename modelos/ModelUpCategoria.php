<?php
require_once "conexion.php";
class clsModelUpdateCategoriaAc
{
    static public function medModelUpdateCategoriaAc($datos)
    {

        $stmt = conexion::conectar()->prepare("UPDATE categoriaproducto SET Nombre=:nombre WHERE IdCategoriaProducto =:idcategoria ");
        $stmt->bindParam(":nombre",$datos["Nombre"],PDO::PARAM_STR);
         $stmt->bindParam(":idcategoria",$datos["IdCategoria"],PDO::PARAM_STR);


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