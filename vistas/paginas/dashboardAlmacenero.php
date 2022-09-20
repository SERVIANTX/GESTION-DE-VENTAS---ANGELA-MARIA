<?php
    require_once '../modelos/ModelListDashboard.php';
    require_once '../controladores/ControlListDashboard.php';
    require_once "../modelos/ModelComboProducto.php";
    $Ventas = clsControlArrayVentasDash::medSeleccionarVentasDash();
    $productos = clsControlArrayVentasDash::medSeleccionarVentasDash2();
    $cliente = clsControlArrayVentasDash::medSeleccionarVentasDash3();
    $empleado = clsControlArrayVentasDash::medSeleccionarVentasDash4();
    $proveedor = clsControlArrayVentasDash::medSeleccionarVentasDash5();
    $ventasDia = clsControlArrayVentasDash::medSeleccionarVentasDash6();

?>
<div class="row">
                <div class="col-7">
                <input id="tags" style=" height: 100px; font-size: 50px;" class="form-control" >
                                
               </div>
               <div class="col-5 btn-group">
               
               <Label style="  font-size: 50px;"> STOCK ACTUAL:</Label>
 <br>
               <h2 id="cantidadstock" style="  font-size: 200px;;"></h2>
           
               </div>

                </div>
<div class="sb-nav-fixed">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active"></li>
                </ol>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body" style="max-width:200px; max-height:300px;">
                                <?php foreach ($Ventas as $indice => $valor): ?>
                                <label class="letras"><?php echo $valor["Venta"]; ?></label>
                                <?php endforeach; ?>
                                <img src="asset/img/svg/1.png" width="70">
                                <p></p>
                                <label class="dash">Ventas del mes</label>


                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body" style="max-width:200px; max-height:300px;">
                                <?php foreach ($cliente as $indice => $valor): ?>
                                <label class="letras"><?php echo $valor["cliente"]; ?></label>
                                <?php endforeach; ?>
                                <img src="asset/img/svg/2.png"
                                    width="70">
                                <p></p>
                                <label class="dash">Clientes registrados</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body" style="max-width:200px; max-height:300px;">
                                <?php foreach ($empleado as $indice => $valor): ?>
                                <label class="letras"><?php echo $valor["empleado"]; ?></label>
                                <?php endforeach; ?>
                                <img src="asset/img/svg/3.png"
                                    width="70">
                                <p></p>
                                <label class="dash">Empleados registrados</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body" style="max-width:200px; max-height:300px;">
                                <?php foreach ($productos as $indice => $valor): ?>
                                <label class="letras"><?php echo $valor["producto"]; ?></label>
                                <?php endforeach; ?>
                                <img src="asset/img/svg/4.png"
                                    width="70">
                                <p></p>
                                <label class="dash">Productos registrados</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body" style="max-width:200px; max-height:300px;">
                                <?php foreach ($ventasDia as $indice => $valor): ?>
                                <label class="letras"><?php echo $valor["ventadia"]; ?></label>
                                <?php endforeach; ?>
                                <img src="asset/img/svg/5.png" width="70">
                                <p></p>
                                <label class="dash">Ventas del dia</label>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body" style="max-width:200px; max-height:300px;">
                                <?php foreach ($proveedor as $indice => $valor): ?>
                                <label class="letras"><?php echo $valor["proveedor"]; ?></label>
                                <?php endforeach; ?>
                                <img src="asset/img/svg/6.png" width="70">
                                <p></p>
                                <label class="dash">Proveedores registrados</label>
                            </div>
                        </div>
                    </div>

                </div>

        </main>

</div>
<script type="text/javascript" src="boostrack/js/jquery-1.12.1.min.js"></script>
  <script type="text/javascript" src="boostrack/js/jquery-ui.js"></script>
  <link rel="stylesheet" href="boostrack/js/jquery-ui.css" />

<?php
$combolistproduc = clsModelComboProducto::medModelComboProducto();?>
<script>
  $(document).ready(function() {
    var items = <?= json_encode($combolistproduc) ?>

    $("#tags").autocomplete({

      source: items,

      select: function(event, item) {
        var params = {
          equipo: item.item.value
        };
        $.get("../modelos/ModelLlenarDatosProductoDhasboar.php", params, function(response) {
          var json = JSON.parse(response);
          if (json.status == 200) {
           
            $("#cantidadstock").html(json.StockMinimo);
         


          } else {

          }
        }); // ajax
      }

    });
  });
</script>