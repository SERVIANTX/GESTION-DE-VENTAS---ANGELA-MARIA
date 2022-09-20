<?php


require_once "../modelos/ModelListReporteProducto.php";
require_once "../controladores/ControlReporteProducto.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="boostrack/css/bootstrap.min.css" />

    <link rel="stylesheet" href="asset/css/estiloprueba.css" />
    <link rel="stylesheet" href="asset/css/dashboarestilos.css" />
    <link rel="stylesheet" href="asset/css/yestilosdhasboard.css" />




    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
    <title>entrada</title>

</head>
<br>
<div style="background-color: #fffbf4;">
            <p style="font-size:25px;" class="bg-dark text-white text-center">.: REPORTE DE PRODUCTOS :.</p>
<div class="row">

    <div class=" col-10 ">

        <div class="container">
            <?php
             $Producto = clsControlArrayReporteProducto::medReporteProducto();
            ?>
            
            <table id="datatablesSimple" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>IdProducto</th>
                        <th>Marca</th>
                        <th>Producto</th>
                        <th>Unidad_Medida</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Producto as $indice => $valor): ?>
                    <tr>
                        <td><?php echo $valor["IdProducto"]; ?></td>
                        <td><?php echo $valor["Marca"]; ?></td>
                        <td><?php echo $valor["Nombre"]; ?></td>
                        <td><?php echo $valor["UnidadMedida"]; ?></td>
                        <td><?php echo $valor["Categoria"]; ?></td>
                       
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>




    </div>

 
    <div class="col-2 ">
        <br>
        <br>
        <br>

        <div class="d-grid gap-2 col-8 mx-auto">

            <a href="paginas/reporteProductopdf.php" target="_blank">
            <button type="submit" class="btn btn-outline-danger" name="btnconsultar" style="width:150px;height:40px;">Generar pdf</button>
            </a>
        </div>

         </form>
    </div>

    </div>
</div>
<br>
<script src="boostrack/js/jquery-3.6.0.min.js"></script>
<script src="boostrack/js/bootstrap.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="boostrack/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
</script>


<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../vistas/boostrack/js/datatables-simple-demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
</script>
