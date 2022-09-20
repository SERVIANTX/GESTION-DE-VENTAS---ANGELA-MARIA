<?php 



require_once "conexion.php";

	$categoria = $_GET['equipo'];

    $con= conexion::conectar();

    $consul= "SELECT * FROM categoriaproducto WHERE Nombre = '$categoria'";

    $result = $con->query($consul);


    $num=$result->rowCount();


    if ($num > 0)
        {
            $pro =  $result->fetch(PDO::FETCH_OBJ);
    
            $pro->status = 200;

            echo json_encode($pro);

        }

    ?>