<?php

require_once "../modelos/ModelListComprobanteVenta.php";
require_once "../controladores/ControlArrayListComprobanteVenta.php";

require_once "../modelos/ModelListComprobanteAc.php";
require_once "../controladores/ControlArrayListComprobanteAc.php";

require_once "../modelos/ModelUpComprobante.php";
require_once "../controladores/ControlUpComprobante.php";

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
    <script>
    function solonumeros(e) {
      key = e.keyCode || e.wich;
      teclado = String.fromCharCode(key);
      numeros = "0123456789";
      especiales = "8-37-38-46";
      teclado_especial = false;

      for (var i in especiales) {
        if (key == especiales[i]) {
          teclado_especial = true;
        }
      }

      if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
      }
    }

    //LLamar: onkeypress="return solonumeros(event)" onpaste="return false">

    function sololetras(e) {
      key = e.keyCode || e.wich;
      teclado = String.fromCharCode(key).toLowerCase();
      letras = "abcdefghijklmnñopqrstuvwxyz";
      especiales = "8-37-38-46-164"; //N° 164 para la ñ
      teclado_especial = false;
      for (var i in especiales) {
        if (key == especiales[i]) {
          teclado_especial = true;
          break;
        }
      }

      if (letras.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
      }
    }
    //LLamar: onkeypress="return sololetras(event)" onpaste="return false">
  </script>

</head>

<!-- aka empisa cuerpo entrada -->
<form class="needs-validation" method="POST" novalidate>
    <br>
    <div class="<?php if (isset($_GET['id'])) {
                    echo "";
                } else {
                    echo "d-none d-xl-none";
                } ?>" id="divcambiar" style="background-color: #fffbf4; width:650px;height:330px; margin-left: auto; margin-right:auto;">
       <p style="font-size:25px;" class="bg-dark text-white text-center">.: Actualizar Comprobante de Venta :.</p>
       <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
            <br>
                <?php
                if (isset($_GET['id'])) {
                    $varid = $_GET['id'];
                    $Comprobante = clsControlArrayListComprobanteAc::medSeleccionarComprobanteAc($varid);
                }
                ?>
                <!--  CAJA DE Comprobante de Venta -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Comprobante de Venta</strong></label>
                    <input onkeypress="return sololetras(event)" onpaste="return false" onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" value="<?php if (empty($Comprobante)) {
                                                                                                                                    echo $Comprobante = "";
                                                                                                                                } else {
                                                                                                                                    echo $Comprobante["Nombre"];
                                                                                                                                }
                                                                                                                                ?>" name="txtactualizarnombre" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <!--    CAJA DE Numero de Serie -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Numero de Serie</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" value="<?php if (empty($Comprobante)) {
                                                                                                                                    echo $Comprobante = "";
                                                                                                                                } else {
                                                                                                                                    echo $Comprobante["NumeroBalotario"];
                                                                                                                                } ?>" name="txtactualizarserie" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-3">
            </div>
            <div class="col-sm-6">
                <!--  CAJA DE Numero de Comprobante -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Numero de Comprobante</strong></label>
                    <input onkeypress="return solonumeros(event)" onpaste="return false" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" value="<?php if (empty($Comprobante)) {
                                                                                                                                    echo $Comprobante = "";
                                                                                                                                } else {
                                                                                                                                    echo $Comprobante["NumeroSerie"];
                                                                                                                                } ?>" name="txtactualizarnum" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->

                    <input style="display: none;" class="form-control margencaja" type="text" id="formGroupInputSmall" value="<?php if (empty($Comprobante)) {
                                                                                                                                    echo $Comprobante = "";
                                                                                                                                } else {
                                                                                                                                    echo $Comprobante["IdComprobanteVenta"];
                                                                                                                                } ?>" name="txtidComprobanteVenta">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        $comprobante = clsControlArrayListComprobante::medSeleccionarComprobante();
        ?>
        <div class="col-sm-10 ">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Comprobante</th>
                            <th>Serie</th>
                            <th>Numero de comprobante</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($comprobante as $indice => $valor) : ?>
                            <tr>
                                <td><?php echo $valor["Nombre"]; ?></td>
                                <td><?php echo $valor["NumeroBalotario"]; ?></td>
                                <td><?php echo $valor["NumeroSerie"]; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="incio.php?paginas=ActualizarComprobanteVenta&id=<?php echo $valor['IdComprobanteVenta']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    </div>


                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
           
        </div>
        <div class="col-sm-2">
            <br>
            <br>
            <br>
            <div class="d-grid gap-2 col-8 mx-auto">
                <button type="submit" class="btn btn-primary" name="btnActualizarCrompobante">Actualizar comprobante</button>
            </div>
            <br>
            <br>
            <br>
            <br>

        </div>

    </div>
    <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            

    <script type="text/javascript" src="boostrack/js/jquery-1.12.1.min.js"></script>

    <script type="text/javascript" src="boostrack/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="boostrack/js/jquery-ui.css" />

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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</form>

<?php
            $ActualizarCrompobante = clsControlUpdateComprobanteAc::medControlUpdateComprobanteAc();
            if ($ActualizarCrompobante == "ok") {
                echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";

                        echo "<script>swal('Felicidades!', 'Datos Actualizados', 'success');</script>";

                        echo "<script>  setTimeout(function(){window.location='incio.php?paginas=ActualizarComprobanteVenta';}, 2000);</script>";

               
            }
            ?>
<script>
    (function() {
        'use strict'


        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>