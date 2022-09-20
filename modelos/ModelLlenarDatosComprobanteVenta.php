<?php 



require_once "conexion.php";






	$comprobanteventa= $_GET['equipo'];

    $con= conexion::conectar();

    $consul= "SELECT * FROM comprobanteventa WHERE Nombre = '$comprobanteventa'";

    $result = $con->query($consul);


    $num=$result->rowCount();


    if ($num > 0)
        {
            $pro =  $result->fetch(PDO::FETCH_OBJ);
    
            $pro->status = 200;

            echo json_encode($pro);

        }




	


    ?>