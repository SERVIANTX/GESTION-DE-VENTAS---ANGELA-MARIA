<?php
require_once "../modelos/ModelInsertEmpleado.php";
require_once "../controladores/ControlArrayEmpleado.php";



require_once "../modelos/ModelComboCargo.php";

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
    <title>Empleado</title>

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


<!-- aka empisa cuerpo entrada -->
<br>
<form class="needs-validation" method="POST" novalidate>
    <div style="background-color: #fffbf4;">

        <p style="font-size:25px;" class="bg-dark text-white text-center">.: EMPLEADO :.</p>
        <br>
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-3">
                <!--  CAJA DE Nombre -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nombre</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control col-sm-4" type="text" placeholder="escribir" name="txtnombre" onkeypress="return sololetras(event)" onpaste="return false" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Telefono -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Telefono</strong></label>
                    <input class="form-control " type="text" placeholder="escribir" name="txttelefono" onkeypress="return solonumeros(event)" onpaste="return false" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
            <div class="col-sm-3">
                <!--  CAJA DE Direccion -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Direccion</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control " type="text" placeholder="escribir" name="txtdireccion" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-3">

                <!--  CAJA DE Apellidos -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Apellidos</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control " type="text" placeholder="escribir" name="txtapellido" onkeypress="return sololetras(event)" onpaste="return false" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Documento -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Documento</strong></label>
                    <select class="form-select margencaja" type="select" name="txtdocidentificacion" onkeypress="return sololetras(event)" onpaste="return false" required>
                        <option selected disabled value="">Seleccione</option>
                        <option>DNI</option>
                        <option>PASAPORTE</option>
                        <option>CARNET DE EXTRANGERIA</option>
                    </select>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
            <div class="col-sm-3">
                <!--  CAJA DE Numero Documento -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Numero Documento</strong></label>
                    <input maxlength="12" class="form-control " type="number" placeholder="escribir" name="txtnumdocumento" onkeypress="return solonumeros(event)" onpaste="return false" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Nacionalidad -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nacionalidad</strong></label>
                    <div class="input-group">
                        <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" placeholder="escribir" name="txtnacionalidad" onkeypress="return sololetras(event)" onpaste="return false" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Cargo de Empleado -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Cargo de Empleado</strong></label>
                    <div class="input-group">
                        <input id="comboempleacargo" class="form-control " type="text" placeholder="escribir" onkeypress="return sololetras(event)" onpaste="return false" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                        <input id="idempleadocargo" class="form-control " type="hidden" placeholder="escribir" name="txtcargoempleado">

                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <!--  CAJA DE Usuario -->
                <div  class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Usuario</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" placeholder="escribir" name="txtnombreusuario" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>

            <div class="col-sm-2">
                <!--  CAJA DE Contraseña -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Contraseña</strong></label>
                    <input class="form-control margencaja" type="password" placeholder="escribir" name="txtcontraseña" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                </div>
            </div>



        </div>
        <br>
        <div class="row">
            <div class="col-9">
            </div>
            <div class="col-3 ">
                <div class="d-grid gap-2 col-7 mx-auto">
                    <button type="sumit" class="btn btn-outline-success myButton" name="btnGuardarEmpleado">Agregar empleado</button>

                    <a href="incio.php?paginas=ActualizarEmpleado" class="btn btn-outline-success myButton">Actualizar empleado</a>
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
</form>
<?php
        $guardarempleado = clsControlArrayEmpleado::medControlArrayEmpleado();
        if ($guardarempleado == "ok") {
            echo "<script>swal('Felicidades!', 'Empleado Agregado', 'success');</script>";
            echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";
        }
     
        ?>



<?php

$combolistcargo = clsModelComboCargo::medModelComboCargo();
$combolistcargoID = clsModelComboCargo::medModelComboCargoId();
?>



<script>
    $(document).ready(function() {
        var items = <?= json_encode($combolistcargo) ?>;
        var itemsID = <?= json_encode($combolistcargoID) ?>;
        $("#comboempleacargo").autocomplete({
            source: items
        });

        $("#comboempleacargo").on("change", function() {
            var valor = $("#comboempleacargo").val();
            var index = items.indexOf(valor);
            var IDCargo = itemsID[index];
            // console.log(IDSelecc);
            $("#idempleadocargo").val(IDCargo);
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