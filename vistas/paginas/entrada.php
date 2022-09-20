<?php
$empleado = $_SESSION["empleado"];
$cargo =  $_SESSION["cargo"];
$idempelado = $_SESSION["idempelado"];


require_once "../modelos/ModelListProducto.php";
require_once "../controladores/ControlArrayListProducto.php";

require_once "../modelos/ModelComboProducto.php";

require_once "../modelos/ModelComboProveedor.php";

require_once "../modelos/ModelComboEntradaDocEmision.php";

require_once "../modelos/ModelComboEmpleado.php";

require_once "../modelos/ModelInsertEntrada.php";
require_once "../controladores/ControlArrayEntrada.php";

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


    <?php
    date_default_timezone_set('America/Mexico_City');
    $Fech = date("Y-m-d");  ?>


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
            letras = "abcdefghijklmnñopqrstuvwxyz. :";
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
    <div style="background-color: #fffbf4;">
        <p style="font-size:25px;" class="bg-dark text-white text-center">.: ENTRADA DE PRODUCTOS :.</p>
        <br>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Proveedor -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Proveedor</strong></label>
                    <input id="entradaprovedor" class="form-control " type="text" placeholder="escribir" onkeypress="return sololetras(event)" onKeyUP="this.value=this.value.toUpperCase();" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                    <input style="display: none;" id="identradaproveedor" class="form-control " type="text" placeholder="escribir" name="txtentradaproveedor">
                </div>
            </div>

            <div class="col-sm-3">
                <!--    CAJA DE Fecha de compra -->
                <div class="mb-3 position-relative"><label class="form-label" for=""><strong>Fecha de compra</strong></label>
                    <input class="form-control " type="date" value="<?php echo ($Fech); ?>" name="txtentradafechacompra" required readonly>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>

            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Documento de emision -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Documento de emision</strong></label>
                    <input id="combodocemision" class="form-control " type="text" placeholder="escribir" onkeypress="return sololetras(event)" onpaste="return false" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                    <input style="display: none;" id="identradadocemision" class="form-control " type="text" placeholder="escribir" name="txtentradatipoducmento">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-4">

                <!--  CAJA DE N° Documento -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>N° Documento</strong></label>
                    <input maxlength="11"  class="form-control " type="text" placeholder="escribir" name="txtentradanumerodocumento" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>

            <div class="col-sm-3">
                <!--  CAJA DE Documento de emision -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Empleado</strong></label>
                    <input id="Comboempleado" class="form-control " type="text" placeholder="escribir" value="<?PHP echo $empleado ?>" required readonly>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                    <input id="identrdaempleado" style="display: none;" class="form-control " type="text" placeholder="escribir" value="<?PHP echo $idempelado ?>" name="txtentradaempleado" readonly>
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
                        <th>Precio de Compra</th>
                        <th>Precio de Venta</th>
                        <th>Fecha de Vencimiento</th>
                        <th></th>
                </tr>
        </thead>
                        <tr class="fila-fija">
                            <td><input type="hidden"  id="idproducto" name="txtentradaproducto[]" placeholder="id" /></td>
                            <td>
                                <div class="position-relative"><input required id="tags" placeholder="Producto" />
                                    <div class="invalid-tooltip">Complete los datos</div>
                                </div>
                            </td>
                            <td>
                                <div class="position-relative"><input required value="" name="txtentradacantidad[]" placeholder="Cantidad" onkeypress="return solonumeros(event)" onpaste="return false" />
                                    <div class="invalid-tooltip">Complete los datos</div>
                                </div>
                            </td>
                            <td>
                                <div class="position-relative"><input required value="" name="txtentradalote[]" placeholder="Lote" />
                                    <div class="invalid-tooltip">Complete los datos</div>
                                </div>
                            </td>
                            <td>
                                <div class="position-relative"><input required value="" name="txtentradapreciocompra[]" placeholder="Precio Compra" onkeypress="return solonumeros(event)" onpaste="return false" />
                                    <div class="invalid-tooltip">Complete los datos</div>
                                </div>
                            </td>
                            <td>
                                <div class="position-relative"><input required value="" name="txtentradaprecioventa[]" placeholder="Precio Venta" onkeypress="return solonumeros(event)" onpaste="return false" />
                                    <div class="invalid-tooltip">Complete los datos</div>
                                </div>
                            </td>
                            <td>
                                <div class="position-relative"><input required type="date" value="" name="txtentradafechavencimiento[]" min="<?php echo date("Y-m-d", strtotime(date("Y-m-d") . "0 days")); ?>">
                                    <div class="invalid-tooltip">Complete los datos</div>
                                </div>
                            </td>

                            <td class="eliminar"><button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="col-2 ">
                <div class="d-grid gap-2 col-4 mx-auto">
                    <button id="adicional" name="adicional" type="button" class="btn btn-outline-success"> Más + </button>
                    <input type="submit" name="btnguardarentrada" value="Agregar Entrada" class="btn btn-outline-success" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
    </script>
    <script src="asset/js/datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../vistas/boostrack/js/datatables-simple-demo.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</form>

<?php
    $guardarsalida = clsControlArrayEntrada::medControlArrayEntrada();
    if ($guardarsalida == "ok") {
        echo "<script>swal('Felicidades!', 'Entrada de Productos Realizada', 'success');</script>";

        echo "<script>
        if(window.history.replaceState)
        {
            window.history.replaceState(null,null,window.location.href);
        }
    </script>";
    }
    ?>



<?php
$combolistproduc = clsModelComboProducto::medModelComboProducto();
$combolistproveedor = clsModelComboProveedor::medModelComboProveedor();

$combolistdocemision = clsModelComboEntradaDocEmision::medModelComboEntradaDocEmision();
$combolistempelado = clsModelComboEmpleado::medModelComboEmpleado();
?>

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

<script>
    $(document).ready(function() {
        var items = <?= json_encode($combolistproduc) ?>

        $("#tags").autocomplete({

            source: items,

            select: function(event, item) {
                var params = {
                    
                    equipo: item.item.value
                };
               $.get("../modelos/ModelLlenarDatosProductoEntradaNueva.php", params, function(response) {
                   console.log(response);
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


<script>
    $(document).ready(function() {
        var items = <?= json_encode($combolistproveedor) ?>

        $("#entradaprovedor").autocomplete({

            source: items,

            select: function(event, item) {
                var params = {
                    equipo: item.item.value
                };
                $.get("../modelos/ModelLlenarDatosProveedor.php", params, function(response) {
                    var json = JSON.parse(response);
                    if (json.status == 200) {
                        $("#identradaproveedor").attr("value", json.IdProveedor);
                    } else {}
                }); // ajax
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        var items = <?= json_encode($combolistdocemision) ?>

        $("#combodocemision").autocomplete({

            source: items,

            select: function(event, item) {
                var params = {
                    equipo: item.item.value
                };
                $.get("../modelos/ModelLlenarDatosEntradaDocEmision.php", params, function(response) {
                    var json = JSON.parse(response);
                    if (json.status == 200) {
                        $("#identradadocemision").attr("value", json.IdDocumentoEmision);
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

        $("#Comboempleado").autocomplete({

            source: items,


            select: function(event, item) {
                var params = {
                    equipo: item.item.value
                };
                $.get("../modelos/ModelLlenarDatosEmpleado.php", params, function(response) {
                    var json = JSON.parse(response);
                    if (json.status == 200) {
                        $("#identrdaempleado").attr("value", json.IdEmpleado);
                    } else {}
                }); // ajax
            }
        });
    });
</script>

<!-- ////////////////////////////////////////////////////////////////////////// empleado /////////////////////////////////////////////////////////////////////// -->


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