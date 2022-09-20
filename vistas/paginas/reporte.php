<?php


require_once "../modelos/ModelListReporteVentas.php";
require_once "../controladores/ControlArrayListReporteVenta.php";

require_once "../modelos/ModelReporteVentaFechas.php";
require_once "../controladores/ControlReporteventafechas.php";


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




<!-- aka empisa cuerpo entrada -->
<br>
<form method="POST">
<div style="background-color: #fffbf4;">
    <p style="font-size:25px;" class="bg-dark text-white text-center">.: REPORTE DE VENTAS :.</p>
    <div class=" row">
        
        <div class="col-sm-1">
        </div>
        <div class="col-sm-3">
            <!--  CAJA DE Fecha Incio -->
            <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Fecha Incio</strong></label>
                <input class="form-control " type="date" id="prueba2" name="txtfechaini">
            </div>
        </div>
        <div class="col-sm-3">
            <!--  CAJA DE Fecha Final -->
            <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Fecha Final</strong></label>
                <input class="form-control margencaja" type="date" id="formGroupInputSmall" name="txtfechafin">
            </div>
        </div>
    </div>

    <div class="row">

        <div class=" col-10 ">

            <div class="container">
                <?php
                $ventasconfechas = clsControlArrayVentaFechas::medControlArrayVentaFechas();
                ?>
                <br>
                <table id="datatablesSimple" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>IdVenta</th>
                            <th>Cliente</th>
                            <th>Fecha_Emision</th>
                            <th>N.Documento</th>
                            <th>Empleado</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Importe</th>
                            <th>Lote</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($ventasconfechas == null) {

                            $ventas = clsControlArrayListVenta::medSeleccionarVenta();

                            foreach ($ventas as $indice => $valor) : ?>
                                <tr>
                                    <td><?php echo $valor["Idventa"]; ?></td>
                                    <td><?php echo $valor["RazonSocial"]; ?></td>
                                    <td><?php echo $valor["FechaEmision"]; ?></td>
                                    <td><?php echo $valor["NumeroDocumentoVenta"]; ?></td>
                                    <td><?php echo $valor["NombreE"]; ?></td>
                                    <td><?php echo $valor["NombreProducto"]; ?></td>
                                    <td><?php echo $valor["CantidadProducto"]; ?></td>
                                    <td><?php echo $valor["PrecioUnitario"]; ?></td>
                                    <td><?php echo $valor["Importe"]; ?></td>
                                    <td><?php echo $valor["Lote"]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php
                        } else {

                            foreach ($ventasconfechas as $indice => $valor) : ?>
                                <tr>
                                    <td><?php echo $valor["Idventa"]; ?></td>
                                    <td><?php echo $valor["RazonSocial"]; ?></td>
                                    <td><?php echo $valor["FechaEmision"]; ?></td>
                                    <td><?php echo $valor["NumeroDocumentoVenta"]; ?></td>
                                    <td><?php echo $valor["NombreE"]; ?></td>
                                    <td><?php echo $valor["NombreProducto"]; ?></td>
                                    <td><?php echo $valor["CantidadProducto"]; ?></td>
                                    <td><?php echo $valor["PrecioUnitario"]; ?></td>
                                    <td><?php echo $valor["Importe"]; ?></td>
                                    <td><?php echo $valor["Lote"]; ?></td>
                                </tr>
                        <?php endforeach;
                        } ?>
                    </tbody>
                </table>
            </div>




        </div>
        <div class="col-2 ">
            <br>
            <br>
            <br>

            <div class="d-grid gap-2 col-8 mx-auto">

                <button type="submit" class="btn btn-outline-danger" name="btnbuscarFechasVentas" style="width:150px;height:40px;">Enviar</button>
            </div>
            <br>
            <div class="d-grid gap-2 col-8 mx-auto">
                <a href="paginas/reporteVentaspdf.php" target="_blank">
                    <button action="paginas/reporteVentaspdf.php" type="button" class="btn btn-outline-danger" name="btngenerar" style="width:150px;height:40px;">Generar pdf</button>
                </a>
            </div>
            <br>

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