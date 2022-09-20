<?php 



require_once "conexion.php";






	$cliente= $_GET['equipo'];

    $con= conexion::conectar();

    $consul= "SELECT * FROM cliente WHERE RazonSocial = '$cliente'";

    $result = $con->query($consul);


    $num=$result->rowCount();


    if ($num > 0)
        {
            $pro =  $result->fetch(PDO::FETCH_OBJ);
    
            $pro->status = 200;

            echo json_encode($pro);

        }




	


    ?>