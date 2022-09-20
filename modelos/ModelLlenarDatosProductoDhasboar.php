<?php 



require_once "conexion.php";






	$producto= $_GET['equipo'];

    $con= conexion::conectar();

    $consul= "SELECT k.StockMinimo FROM producto AS P INNER JOIN kardex AS K
    ON P.IdProducto=K.IdProducto WHERE P.nombre = '$producto'";

    $result = $con->query($consul);


    $num=$result->rowCount();


    if ($num > 0)
        {
            $pro =  $result->fetch(PDO::FETCH_OBJ);
    
            $pro->status = 200;

            echo json_encode($pro);

        }




	


    ?>