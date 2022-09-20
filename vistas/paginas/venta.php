<?php


$empleado = $_SESSION["empleado"];
$cargo =  $_SESSION["cargo"];
$idempelado = $_SESSION["idempelado"];



require_once "../modelos/ModelInsertCliente.php";
require_once "../controladores/ControlArrayCliente.php";

require_once "../modelos/ModelComboProducto.php";
require_once "../modelos/ModelComboCliente.php";
require_once "../modelos/ModelComboEmpleado.php";
require_once "../modelos/ModelComboComprobanteventa.php";


require_once "../modelos/ModelInsertVenta.php";
require_once "../controladores/ControlArrayVenta.php";


require_once "../modelos/ModelListNumeroBoletaVenta.php";
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
  <title>Entrada</title>

  <script>
    function solonumeros(e) {
      key = e.keyCode || e.wich;
      teclado = String.fromCharCode(key);
      numeros = "0123456789.";
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
      letras = "abcdefghijklmnñopqrstuvwxyz ";
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
<?php
date_default_timezone_set('America/Mexico_City');
$Fech = date("Y-m-d");  ?>


<!-- aka empisa cuerpo entrada -->
<form class="needs-validation" method="POST" novalidate>
  <br>
  <div style="background-color: #fffbf4;">
    <p style="font-size:25px;" class="bg-dark text-white text-center">.: VENTAS :.</p>
    <br>
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-2">
        <!--  CAJA DE CLIENTE -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Cliente</strong></label>
          <input id="comboclienterazon" class="form-control " type="text" placeholder="escribir" onkeypress="return sololetras(event)" onpaste="return false" required>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
          <input style="display: none;" id="idventacliente" class="form-control " type="text" placeholder="escribir" name="txtventacliente">
        </div>
      </div>

      <div class="col-sm-3">
        <!--    CAJA DE FECHA -->
        <div class="mb-3 position-relative"><label class="form-label" for=""><strong>Fecha</strong></label>
          <input class="form-control " type="date" name="txtventafecha" value="<?php echo ($Fech); ?>" required readonly>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
        </div>
      </div>
      <div class="col-sm-2">
        <!--  CAJA DE Empleado -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Empleado</strong></label>
          <input id="Comboventaempleado" class="form-control" value="<?PHP echo $empleado ?> " required readonly>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
          <input style="display: none;" id="idventaempleado" class="form-control " name="txtventaempleado" value="<?PHP echo $idempelado ?>">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-3">
        <!--  CAJA DE Comprobante de venta -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Comprobante de venta</strong></label>
          <input class="form-control " type="text" placeholder="escribir" value="Boleta" required readonly>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
          <input style="display: none;" value="1" class="form-control " type="text" placeholder="escribir" name="txtventatipocomprobante">
        </div>
      </div>

      <?php

      $numboleta = clsModelListNumeroBoletaVenta::medModelListNumeroBoletaVenta();

      $var = $numboleta["NUMBOLETA"];

      ?>

      <div class="col-sm-4">
        <!--  CAJA DE N°Boleta/Factura -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>N°Boleta/Factura</strong></label>
          <input class="form-control " type="text" id="formGroupInputSmall" value="<?php echo $var ?>" placeholder="Small input" name="txtventanuemrocomprobante" required readonly>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="row">
      <div class="col-sm-10 ">
        <h3 class="bg-dark text-white text-center pad-basic no-btm">Agregar Productos</h3>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-10 ">
        <div class="table-responsive">
          <table class="table table-dark table-striped" id="tabla">
          <thead>
                <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Lote</th>
                        <th>Fecha</th>
                        <th>Precio</th>
                        <th>Importe</th>
                        <th></th>
                </tr>
        </thead>
            <tr class="fila-fija">
              <td><input style="display: none;" id="idproducto" name="txtidproventa[]" placeholder="id" /></td>
              <td>
                <div class="position-relative"><input id="tags" placeholder="Producto" required />
                  <div class="invalid-tooltip">Complete los datos</div>
                </div>
              </td>
              <td>
                <div class="position-relative"><input onkeypress="return solonumeros(event)" onpaste="return false" id="canti" value="" name="txtventacantidad[]" placeholder="Cantidad" required />
                  <div class="invalid-tooltip">Complete los datos</div>
                </div>
              </td>
              <td><input id="lote" value="" name="txtventalote[]" placeholder="Lote" readonly="" /></td>
              <td><input id="fechavensal" type="date" value="" name="txtsalidaventafecha[]" readonly=""></td>
              <td><input id="precio" value="" name="txtventaprecio[]" placeholder="Precio" readonly="" /></td>
              <td><input id="importe" value="" name="txtventaimporte[]" placeholder="Importe" readonly=""></td>
              <td class="eliminar"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
            </tr>
          </table>
        </div>
      </div>

      <div class="col-sm-2">
        <div class="d-grid gap-2 col-8 mx-auto">
          <button id="adicional" name="adicional" type="button" class="btn btn-outline-success"> Más + </button>
          <input type="submit" name="btnguardarventa" value="Realizar Venta" class="btn btn-outline-success" />
          <a href="paginas/Boletapdf.php" target="_blank">
          <button type="button" class="btn btn-outline-success">&nbsp Generar Comprobante</button>
          </a>

        </div>
      </div>
    </div>
    <br>
  </div>
  <br>
  <br>
<br>



  <script type="text/javascript" src="boostrack/js/jquery-1.12.1.min.js"></script>
  <script type="text/javascript" src="boostrack/js/jquery-ui.js"></script>
  <link rel="stylesheet" href="boostrack/js/jquery-ui.css" />
  <script src="boostrack/js/bootstrap.min.js"></script>
  <script src="asset/js/datatables.js"></script>
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
  <?php
  $guardarsalida = clsControlArrayVenta::medControlArrayVenta();
  if ($guardarsalida == "ok") {
    echo "<script>swal('Felicidades!', 'Venta Realizada', 'success');</script>";

    echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";
  }

  ?>
</form>


<!-- /////////////////////////////////////////////////////////// INICIO CREA LOS IMPUTS////////////////////////////////////////////////// -->
<script>
  $(function() {
    // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
    $("#adicional").on('click', function() {
      $("#tabla tbody tr:eq(0) ").clone().removeClass('fila-fija').appendTo("#tabla");
    });

    // Evento que selecciona la fila y la elimina 
    $(document).on("click", ".eliminar", function() {
      var parent = $(this).parents().get(0);
      $(parent).remove();
    });
  });
</script>

<!-- /////////////////////////////////////////////////////////////////// FIN CREA LOS IMPUTS ////////////////////////////////////////////////// -->


<?php
$combolistproduc = clsModelComboProducto::medModelComboProducto();
$combolistcliente = clsModelComboCliente::medModelComboCliente();
$combolistempelado = clsModelComboEmpleado::medModelComboEmpleado();
$combolistcomprobanteventa = clsModelComboComprobanteventa::medModelComboComprobanteventa();

?>

<script>
  $(document).ready(function() {
    var items = <?= json_encode($combolistproduc) ?>

    $("#tags").autocomplete({

      source: items,

      select: function(event, item) {
        var params = {
          equipo: item.item.value
        };
        $.get("../modelos/ModelLlenarDatosProducto.php", params, function(response) {
          var json = JSON.parse(response);
          if (json.status == 200) {
            $("#precio").attr("value", json.PrecioVenta);
            $("#lote").attr("value", json.Lote);
            $("#idproducto").attr("value", json.IdProducto);
            $("#fechavensal").attr("value", json.Fecha);


          } else {

          }
        }); // ajax
      }

    });
  });
</script>

<script>
  var m1 = document.getElementById("canti");
  var m2 = document.getElementById("precio");
  var boton_de_calcular = document.getElementById("canti");
  boton_de_calcular.addEventListener("change", res);

  function res() {
    var multi = m1.value * m2.value;
    $("#importe").attr("value", multi);
  }
</script>

<script>
  $(document).ready(function() {
    var items = <?= json_encode($combolistcliente) ?>

    $("#comboclienterazon").autocomplete({

      source: items,


      select: function(event, item) {
        var params = {
          equipo: item.item.value
        };
        $.get("../modelos/ModelLlenarDatosCliente.php", params, function(response) {
          var json = JSON.parse(response);
          if (json.status == 200) {
            $("#idventacliente").attr("value", json.IdCliente);
          } else {}
        }); // ajax
      }
    });
  });
</script>

<!-- ////////////////////////////////////////////////////////////////////////// empleado /////////////////////////////////////////////////////////////////////// -->
<script>
  $(document).ready(function() {
    var items = <?= json_encode($combolistempelado) ?>
    $("#Comboventaempleado").autocomplete({
      source: items,
      select: function(event, item) {
        var params = {
          equipo: item.item.value
        };
        $.get("../modelos/ModelLlenarDatosEmpleado.php", params, function(response) {
          var json = JSON.parse(response);
          if (json.status == 200) {
            $("#idventaempleado").attr("value", json.IdEmpleado);
          } else {}
        }); // ajax
      }
    });
  });
</script>

<!-- ////////////////////////////////////////////////////////////////////////// empleado /////////////////////////////////////////////////////////////////////// -->

<script>
  $(document).ready(function() {
    var items = <?= json_encode($combolistcomprobanteventa) ?>

    $("#combrobanteventa").autocomplete({

      source: items,

      select: function(event, item) {
        var params = {
          equipo: item.item.value
        };
        $.get("../modelos/ModelLlenarDatosComprobanteVenta.php", params, function(response) {
          var json = JSON.parse(response);
          if (json.status == 200) {
            $("#idcomprobanteventa").attr("value", json.IdComprobanteVenta);



          } else {

          }
        }); // ajax
      }



    });
  });
</script>



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