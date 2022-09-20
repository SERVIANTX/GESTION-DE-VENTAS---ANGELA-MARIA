<?php

require_once "../controladores/ControlArrayListKardex.php";
require_once "../modelos/ModelListKardex.php";

require_once "../controladores/ControlArrayListKardexEntrada.php";
require_once "../modelos/ModelListKardexEntrada.php";

require_once "../controladores/ControlArrayListSalida.php";
require_once "../modelos/ModelListKardexSalida.php";

require_once "../controladores/ControlArrayListVenta.php";
require_once "../modelos/ModelListKardexVenta.php";


require_once "../modelos/ModelComboProducto.php";


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
  <title>kardex</title>

  <script>
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

    var input = document.getElementById('numero');
    input.addEventListener('input', function() {
      if (this.value.length > 12)
        this.value = this.value.slice(0, 12);
    })
  </script>

  <div class="">
  </div>

</head>

<form method="POST">
  <br>
  <div style="background-color: #fffbf4;">
    <p style="font-size:25px;" class="bg-dark text-white text-center">.: KARDEX :.</p>
    <br>
    <div class="row">
      <div class="col-6">
        <div class="">
          <br>

          <div class="input-group mb-3">
            <input style="display: none;" id="idproducto" placeholder="id" />
            <input id="tags" type="text" class="form-control" placeholder="Escriba Producto" aria-label="Recipient's username" aria-describedby="button-addon2" name="txtproductokardex" >
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="btnbuscarproductokardex">BUSCAR</button>
          </div>

        </div>
        <div class="">

          <div class="container">

            <?php $kardex =  clsControlArrayListKardex::medControlArrayListKardex(); ?>

            <table id="datatablesSimple" class="table table-dark table-striped">
              <thead>
                <tr>
                  <th>PRODUCTO</th>
                  <th>STOCK TOTAL</th>
                  <th>PRECIO DE VENTA</th>
                  <th>PRECIO DE COMPRA</th>
                  <th>CANTIDAD DE ENTRANDA</th>
                  <th>CANTIDAD DE SALIDA</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($kardex as $indice2 => $valor2) : ?>
                  <tr>
                    <td><?php echo $valor2["produc"]; ?></td>
                    <td><?php echo $valor2["StockMinimo"]; ?></td>
                    <td><?php echo $valor2["PrecioVenta"]; ?></td>
                    <td><?php echo $valor2["PrecioCompraUltimo"]; ?></td>
                    <td><?php echo $valor2["CantidadEntrada"]; ?></td>
                    <td><?php echo $valor2["CantidadSalida"]; ?></td>
                  </tr>
                <?php endforeach;
                ?>

              </tbody>
            </table>
          </div>
        </div>
        <div class="">
          
        </div>
      </div>
      <div class=" col-6">
        <div class="">
        <p style="font-size:25px;" class="bg-dark text-white text-center">.: ENTRADAS DEL PRODUCTO :.</p>
          <?php $kardexentrada =  clsControlArrayListKardexEntrada::medControlArrayListKardexEntrada(); ?>
          <table id="datatablesSimple" class="table table-dark table-striped">
            <thead>
              <tr>
                <th>PRODUCTO</th>
                <th>CANTIDAD COMPRADA</th>
                <th>LOTE</th>
                <th>PRECIO DE VENTA</th>
                <th>PRECIO DE COMPRA</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($kardexentrada == null) {
              } else {
                foreach ($kardexentrada as $indice => $valor) : ?>
                  <tr>
                    <td><?php echo $valor["Nombre"]; ?></td>
                    <td><?php echo $valor["CantidadComprada"]; ?></td>
                    <td><?php echo $valor["Lote"]; ?></td>
                    <td><?php echo $valor["PrecioVenta"]; ?></td>
                    <td><?php echo $valor["PrecioCompra"]; ?></td>

                  </tr>
              <?php endforeach;
              } ?>

            </tbody>
          </table>
        </div>
        <div class="">
        <p style="font-size:25px;" class="bg-dark text-white text-center">.: SALIDA DEL PRODUCTO :.</p>
          <?php $kardexsalida =  clsControlArrayListSalida::medControlArrayListSalida(); ?>
          <table id="datatablesSimple" class="table table-dark table-striped">
            <thead>
              <tr>
                <th>PRODUCTO</th>
                <th>CANTIDAD DE SALIDA</th>
                <th>LOTE</th>
                <th>PRECIO DE VENTA</th>
                <th>MOTIVO</th>

              </tr>
            </thead>
            <tbody>
              <?php
              if ($kardexsalida == null) {
              } else {
                foreach ($kardexsalida as $indice3 => $valor3) : ?>
                  <tr>
                    <td><?php echo $valor3["Nombre"]; ?></td>
                    <td><?php echo $valor3["can"]; ?></td>
                    <td><?php echo $valor3["Lote"]; ?></td>
                    <td><?php echo $valor3["PrecioVenta"]; ?></td>
                    <td><?php echo $valor3["mov"]; ?></td>

                  </tr>
              <?php endforeach;
              } ?>

            </tbody>
          </table>
        </div>
        <div class="">
        <p style="font-size:25px;" class="bg-dark text-white text-center">.: VENTA DEL PRODUCTO :.</p>

          <?php $kardexventa =  clsControlArrayListVenta::medControlArrayListVenta(); ?>
          <table id="datatablesSimple" class="table table-dark table-striped">
            <thead>
              <tr>
                <th>PRODUCTO</th>
                <th>CANTIDAD VENDIDA</th>
                <th>PRECIO DE VENTA</th>
                <th>IMPORTE</th>
                <th>LOTE</th>
                <th>DEVOLUCION</th>
              </tr>
            </thead>
            <tbody>
            <tbody>
              <?php
              if ($kardexventa == null) {
              } else {
                foreach ($kardexventa as $indice5 => $valor5) : ?>
                  <tr>
                    <td><?php echo $valor5["Nombre"]; ?></td>
                    <td><?php echo $valor5["CantidadProducto"]; ?></td>
                    <td><?php echo $valor5["PrecioUnitario"]; ?></td>
                    <td><?php echo $valor5["Importe"]; ?></td>
                    <td><?php echo $valor5["Lote"]; ?></td>
                    <td><?php echo $valor5["Devolucion"]; ?></td>

                  </tr>
              <?php endforeach;
              } ?>
              

            </tbody>

            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>
</form>
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


<?php $combolistproduc = clsModelComboProducto::medModelComboProducto(); ?>

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


            $("#idproducto").attr("value", json.IdProducto);



          } else {

          }
        }); // ajax
      }

    });
  });
</script>