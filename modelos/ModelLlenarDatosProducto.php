<?php 



require_once "conexion.php";






	$producto= $_GET['equipo'];

    $con= conexion::conectar();

    $consul= "SELECT de.Lote,DATE(de.FechaVencimiento) AS Fecha, k.IdProducto ,k.PrecioVenta FROM detalledocumentoentrada AS de INNER JOIN producto AS p ON de.IdProducto = p.IdProducto INNER JOIN kardex AS k ON p.IdProducto = k.IdProducto WHERE p.Nombre= '$producto'";

    $result = $con->query($consul);


    $num=$result->rowCount();


    if ($num > 0)
        {
            $pro =  $result->fetch(PDO::FETCH_OBJ);
    
            $pro->status = 200;

            echo json_encode($pro);

        }




	


    ?>