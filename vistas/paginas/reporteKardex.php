<?php


require_once "../modelos/ModelListReporteKardex.php";
require_once "../controladores/ControlReporteKardex.php";

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
    <title>Reporte Kardex</title>

</head>

<br>
<div style="background-color: #fffbf4;">
<p style="font-size:25px;" class="bg-dark text-white text-center">.: REPORTE DE KARDEX :.</p>
<div class="row">

    <div class=" col-10 ">

        <div class="container">
            <?php
             $Kardex = clsControlArrayReporteKardex::medReporteKardex();
            ?>
            <table id="datatablesSimple" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>IdKardex</th>
                        <th>Producto</th>
                        <th>Precio Venta</th>
                        <th>Stock Actual</th>
                        <th>Cantidad Entrada</th>
                        <th>Cantidad Salida</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Kardex as $indice => $valor): ?>
                    <tr>
                       <td><?php echo $valor["IdKardex"]; ?></td>
                       <td><?php echo $valor["Producto"]; ?></td>
                       <td><?php echo $valor["PrecioVenta"]; ?></td>
                       <td><?php echo $valor["StockMinimo"]; ?></td>
                       <td><?php echo $valor["CantidadEntrada"]; ?></td>
                       <td><?php echo $valor["CantidadSalida"]; ?></td>
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

            <a href="paginas/reporteKardexpdf.php" target="_blank">
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
