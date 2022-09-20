<?php

require_once "../modelos/ModelInsertProducto.php";
require_once "../controladores/ControlArrayInsertProducto.php";

require_once "../modelos/ModelComboCategoria.php";

require_once "../modelos/ModelComboUnidad.php";

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
    <div style="background-color: #fffbf4; width:750px;height:370px; margin-left: auto; margin-right:auto;">
    <p style="font-size:25px;" class="bg-dark text-white text-center">.: Agregar Producto :.</p>
        <div class="row">
            <div class="col-sm-2 ">
            </div>
            <div class="col-sm-4 ">
                <br>
                <!--  CAJA DE Marca -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Marca</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" name="txtMarca"  required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>

            <div class="col-sm-4 ">
                <br>
                <!--    CAJA DE Nombre -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nombre</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" name="txtNombreproducto"  required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-2 ">
            </div>
            <div class="col-sm-4 ">

                <!--  CAJA DE Categorita -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Categoria</strong></label>
                    <input id="entradacategoria" class="form-control " type="text" placeholder="escribir" onkeypress="return sololetras(event)" onpaste="return false" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                    <input id="identradacategoria" class="form-control " type="hidden" name="txtentradacategoria">
                </div>
            </div>
            <div class="col-sm-4 ">
                <!--  CAJA DE Unidad de Medida -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Unidad de Medida</strong></label>
                    <input id="unidadmedida" class="form-control " type="text" placeholder="escribir" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                    <input id="idunidadmedida" class="form-control " type="hidden" name="txtunidadmedida">
                </div>
            </div>

        </div>


        <div class="row">

            <div class="col-sm-9 ">

            </div>
            <div class="col-sm-2">
                <br>
                <br>
                <div class="d-grid gap-2 col-8 mx-auto">

                    <button type="submit" class="btn btn-primary" name="btnGuardarProducto">Guardar</button>
                </div>       

            </div>
        </div>
    </div>
</form>
<br>




<?php
$combolistcategoria = clsModelComboCategoria::medModelComboCategoria();
$combolistunidad = clsModelComboUnidad::medModelComboUnidad();

?>

</div>
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
<?php
$guardarproducto = clsControlArrayProducto::medControlArrayProducto();
if ($guardarproducto == "ok") {
    echo "<script>swal('Felicidades!', 'Datos Agregados', 'success');</script>";
    echo "<script>  setTimeout(function(){window.location='incio.php?paginas=entrada';}, 2000);</script>";
    echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";
}

?>



<script>
    $(document).ready(function() {
        var items = <?= json_encode($combolistcategoria) ?>

        $("#entradacategoria").autocomplete({

            source: items,

            select: function(event, item) {
                var params = {
                    equipo: item.item.value
                };
                $.get("../modelos/ModelLlenarDatosCategoria.php", params, function(response) {
                    var json = JSON.parse(response);
                    if (json.status == 200) {


                        $("#identradacategoria").attr("value", json.IdCategoriaProducto);

                    } else {

                    }
                }); // ajax
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        var items = <?= json_encode($combolistunidad) ?>

        $("#unidadmedida").autocomplete({

            source: items,

            select: function(event, item) {
                var params = {
                    equipo: item.item.value
                };
                $.get("../modelos/ModelLlenarDatosUnidad.php", params, function(response) {
                    var json = JSON.parse(response);
                    if (json.status == 200) {


                        $("#idunidadmedida").attr("value", json.IdUnidadMedida);

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