<?php


require_once "../modelos/ModelListFechaV.php";
require_once "../controladores/ControlListFechaV.php";

require_once "../modelos/ModelListLoteFechasV.php";
require_once "../controladores/ControlListLoteFechaV.php";


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



<form method="POST">
<!-- aka empisa cuerpo entrada -->
<br>
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
                $LoteconFechas = clsControlArrayListLotes::medControlArrayListLotes();
                ?>
                <br>
                <table id="datatablesSimple" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Marca</th>
                            <th>Producto</th>
                            <th>Lote</th>
                            <th>Fecha Vencimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($LoteconFechas == null) {
                            $LotesinFechas = clsControlArrayReporteFecha::medReporteFecha();
                            foreach ($LotesinFechas as $indice => $valor) : ?>
                                <tr>
                                    <td><?php echo $valor["marca"]; ?></td>
                                    <td><?php echo $valor["producto"]; ?></td>
                                    <td><?php echo $valor["Lote"]; ?></td>
                                    <td><?php echo $valor["FechaVencimiento"]; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <?php
                        } else {
                            foreach ($LoteconFechas as $indice => $valor) : ?>
                                <tr>
                                    <td><?php echo $valor["marca"]; ?></td>
                                    <td><?php echo $valor["producto"]; ?></td>
                                    <td><?php echo $valor["Lote"]; ?></td>
                                    <td><?php echo $valor["FechaVencimiento"]; ?></td>
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

                <button type="submit" class="btn btn-outline-danger" name="btnbuscarFechasVencimiento" style="width:150px;height:40px;">Enviar</button>
            </div>
            <br>
            <div class="d-grid gap-2 col-8 mx-auto">

                <a href="paginas/reporteLoteFechasVpdf.php" target="_blank">
                    <button type="button" class="btn btn-outline-danger" name="btngenerar" style="width:150px;height:40px;">Generar pdf</button>
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