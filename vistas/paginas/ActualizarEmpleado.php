<?php

require_once "../modelos/ModelListReporteEmpleado.php";
require_once "../controladores/ControlReporteEmpleado.php";

require_once "../modelos/ModelListEmpleadoAc.php";
require_once "../controladores/ControlArrayListEmpleadoAc.php";

require_once "../modelos/ModelUpEmpleado.php";
require_once "../controladores/ControlUpEmpleado.php";

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
    <title>Actualizar Empleado</title>

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

<br>

<!-- aka empisa cuerpo entrada -->
<form class="needs-validation" method="POST" novalidate>
    <div class="<?php if (isset($_GET['id'])) {
                    echo "";
                } else {
                    echo "d-none d-xl-none";
                } ?>" id="divcambiar" style="background-color: #fffbf4; width:1000px;height:400px; margin-left: auto; margin-right:auto;">

        <br>
        <div>
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    <?php
                    if (isset($_GET['id'])) {
                        $varid = $_GET['id'];
                        $empleadox = clsControlArrayListEmpleadoAc::medSeleccionarEmpleadoAc($varid);
                    }
                    ?>
                    <!--  CAJA DE Nombre -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nombre</strong></label>
                        <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control col-sm-4" type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                            echo $empleadox = "";
                                                                                                        } else {
                                                                                                            echo $empleadox["Nombre"];
                                                                                                        } ?>" name="txtactualizarnombre" onkeypress="return sololetras(event)" onpaste="return false" required>

                        <input class="form-control " type="hidden" value="<?php if (empty($empleadox)) {
                                                                                echo $empleadox = "";
                                                                            } else {
                                                                                echo $empleadox["IdEmpleado"];
                                                                            } ?>" name="txtactualizarempleado">
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
                <div class="col-sm-3">
                    <!--  CAJA DE Apellidos -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Apellidos</strong></label>
                        <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control " type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                    echo $empleadox = "";
                                                                                                } else {
                                                                                                    echo $empleadox["Apellido"];
                                                                                                } ?>" name="txtactualizarapellido" onkeypress="return sololetras(event)" onpaste="return false" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <!--  CAJA DE Direccion -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Direccion</strong></label>
                        <input onKeyUP="this.value=this.value.toUpperCase();"   class="form-control " type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                    echo $empleadox = "";
                                                                                                } else {
                                                                                                    echo $empleadox["Direccion"];
                                                                                                } ?>" name="txtactualizardireccion" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    <!--  CAJA DE Telefono -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Telefono</strong></label>
                        <input class="form-control " type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                    echo $empleadox = "";
                                                                                                } else {
                                                                                                    echo $empleadox["Telefono"];
                                                                                                } ?>" name="txtactualizartelefono" onkeypress="return solonumeros(event)" onpaste="return false" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
                <div class="col-sm-3">
                    <!--  CAJA DE Documento -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Documento</strong></label>
                        <input class="form-control" type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                    echo $empleadox = "";
                                                                                                } else {
                                                                                                    echo $empleadox["DocumentoIdentificacion"];
                                                                                                } ?>" name="txtactualizardocidentificacion" onkeypress="return sololetras(event)" onpaste="return false" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>


                <div class="col-sm-4">
                    <!--  CAJA DE Numero Documento -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Numero Documento</strong></label>
                        <input class="form-control " type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                    echo $empleadox = "";
                                                                                                } else {
                                                                                                    echo $empleadox["NumeroDocumento"];
                                                                                                } ?>" name="txtactualizarnumdocumento" onkeypress="return solonumeros(event)" onpaste="return false" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    <!--  CAJA DE Nacionalidad -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nacionalidad</strong></label>
                        <div class="input-group">
                            <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                                    echo $empleadox = "";
                                                                                                                } else {
                                                                                                                    echo $empleadox["Nacionalidad"];
                                                                                                                } ?>" name="txtactualizarnacionalidad" onkeypress="return sololetras(event)" onpaste="return false" required>
                            <!--  -->
                            <div class="invalid-tooltip">Complete los datos</div>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <!--  CAJA DE Cargo de Empleado -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Cargo de Empleado</strong></label>
                        <div class="input-group">
                            <input id="comboempleacargo" class="form-control " type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                                                echo $empleadox = "";
                                                                                                                            } else {
                                                                                                                                echo $empleadox["Cargo"];
                                                                                                                            } ?>" onkeypress="return sololetras(event)" onpaste="return false" required>
                            <!--  -->
                            <div class="invalid-tooltip">Complete los datos</div>
                            <!--  -->
                            <input id="idempleadocargo" class="form-control " type="hidden" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                                                echo $empleadox = "";
                                                                                                                            } else {
                                                                                                                                echo $empleadox["IdCargoEmpleado"];
                                                                                                                            } ?>" name="txtcargoactuempleado">

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <!--  CAJA DE Cargo de Empleado -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Estado</strong></label>
                        <div class="input-group">
                            <input maxlength="2" onKeyUP="this.value=this.value.toUpperCase();" class="form-control " class="form-control " type="text" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                                                echo $empleadox = "";
                                                                                                                            } else {
                                                                                                                                echo $empleadox["Estado"];
                                                                                                                            } ?>" name="txtactualizarEstado" onkeypress="return sololetras(event)" onpaste="return false" required>
                            <!--  -->
                            <div class="invalid-tooltip">Complete los datos</div>
                            <!--  -->
                        </div>
                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-4">
                    <!--  CAJA DE Usuario -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Usuario</strong></label>
                        <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" placeholder="Escribir" value="<?php if (empty($empleadox)) {
                                                                                                                echo $empleadox = "";
                                                                                                            } else {
                                                                                                                echo $empleadox["NombreUsuario"];
                                                                                                            } ?>" name="txtactualizarnombreusuario" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>

                <div class="col-sm-4">
                    <!--  CAJA DE Contraseña -->
                    <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Contraseña</strong></label>
                        <input class="form-control margencaja" type="password" placeholder="escribir" value="<?php if (empty($empleadox)) {
                                                                                                                echo $empleadox = "";
                                                                                                            } else {
                                                                                                                echo $empleadox["contrasenia"];
                                                                                                            } ?>" name="txtactualizarcontrasenia" required>
                        <!--  -->
                        <div class="invalid-tooltip">Complete los datos</div>
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-10 ">
            <div class="container">
                <?php
                $Empleado = clsControlArrayReporteEmpleado::medReporteEmpleado();
                ?>
                <table id="datatablesSimple" class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Empleado</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Cargo</th>
                            <th>Nacionalidad</th>
                            <th>Usuario</th>
                            <th>Tipo_Documento</th>
                            <th>Num Doc</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Empleado as $indice => $valor) : ?>
                            <tr>
                                <td><?php echo $valor["Empleado"]; ?></td>
                                <td><?php echo $valor["Direccion"]; ?></td>
                                <td><?php echo $valor["Telefono"]; ?></td>
                                <td><?php echo $valor["Cargo"]; ?></td>
                                <td><?php echo $valor["Nacionalidad"]; ?></td>
                                <td><?php echo $valor["NombreUsuario"]; ?></td>
                                <td><?php echo $valor["DocumentoIdentificacion"]; ?></td>
                                <td><?php echo $valor["NumeroDocumento"]; ?></td>
                                <td><?php echo $valor["Estado"]; ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="incio.php?paginas=ActualizarEmpleado&id=<?php echo $valor['IdEmpleado']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
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
            <div class="d-grid gap-2  mx-auto">
                <button type="sumit" class="btn btn-outline-danger myButton" name="btnActualizarEmpleado">Actualizar empleado</button>
            </div>
            <br>
            <br>
        </div>
    </div>

</form>


<?php

$combolistcargo = clsModelComboCargo::medModelComboCargo();
$combolistcargoID = clsModelComboCargo::medModelComboCargoId();
?>

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
            $ActualizarEmpleado = clsControlUpdateEmpleado::medControlUpdateEmpleado();
            if ($ActualizarEmpleado == "ok") {
                echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";

                        echo "<script>swal('Felicidades!', 'Datos Actualizados', 'success');</script>";

                        echo "<script>  setTimeout(function(){window.location='incio.php?paginas=ActualizarEmpleado';}, 2000);</script>";


               
            }
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