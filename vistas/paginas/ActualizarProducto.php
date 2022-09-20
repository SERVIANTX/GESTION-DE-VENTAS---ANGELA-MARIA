<?php

require_once "../modelos/ModelListProducto.php";
require_once "../controladores/ControlArrayListProducto.php";

require_once "../modelos/ModelListProductoAc.php";
require_once "../controladores/ControlArrayListProductoAc.php";

require_once "../modelos/ModelUpProducto.php";
require_once "../controladores/ControlUpProducto.php";

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

</head>




<!-- aka empisa cuerpo entrada -->
<form class="needs-validation" method="POST" novalidate>
    <br>
    <div class="<?php if (isset($_GET['id'])) {
                    echo "";
                } else {
                    echo "d-none d-xl-none";
                } ?>" id="divcambiar" style="background-color: #fffbf4; width:850px;height:300px; margin-left: auto; margin-right:auto;">
        <p style="font-size:25px;" class="bg-dark text-white text-center">.: Actualizar Producto :.</p>
        <div class=" row">
        <div class="col-sm-1">
        </div>
            <div class="col-sm-5">
                <?php
                if (isset($_GET['id'])) {
                    $varid = $_GET['id'];
                    $producto = clsControlArrayListProductoAc::medSeleccionarProductoAc($varid);
                }
                ?>
                <br>
                <!--    CAJA DE Marca -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Marca</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" value="<?php if (empty($producto)) {
                                                                                                                                    echo $producto = "";
                                                                                                                                } else {
                                                                                                                                    echo $producto["Marca"];
                                                                                                                                }
                                                                                                                                ?>" name="txtactualizarmarca" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->

                </div>
            </div>

            <div class="col-sm-5">
                <?php
                if (isset($_GET['id'])) {
                    $varid = $_GET['id'];
                    $producto = clsControlArrayListProductoAc::medSeleccionarProductoAc($varid);
                }
                ?>
                <br>
                <!--    CAJA DE Marca -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nombre</strong></label>
                    <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" value="<?php if (empty($producto)) {
                                                                                                                                    echo $producto = "";
                                                                                                                                } else {
                                                                                                                                    echo $producto["Nombre"];
                                                                                                                                } ?>" name="txtactualizarnombre" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->

                    <input class="form-control " type="hidden" value="<?php if (empty($producto)) {
                                                                            echo $producto = "";
                                                                        } else {
                                                                            echo $producto["IdProducto"];
                                                                        } ?>" name="txtactualizaridprod">

                </div>
            </div>

        </div>

        <div class=" row">
        <div class="col-sm-1">
        </div>
            <div class="col-sm-5">
                <?php
                if (isset($_GET['id'])) {
                    $varid = $_GET['id'];
                    $producto = clsControlArrayListProductoAc::medSeleccionarProductoAc($varid);
                }
                ?>
                <br>
                <!--    CAJA DE Unidad de Medida -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Unidad de Medida</strong></label>
                    <input id="unidadmedida" class="form-control " type="text" placeholder="escribir" value="<?php if (empty($producto)) {
                                                                                                                    echo $producto = "";
                                                                                                                } else {
                                                                                                                    echo $producto["UnidadMedida"];
                                                                                                                } ?>" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->

                    <input id="idunidadmedida" class="form-control " type="hidden" value="<?php if (empty($producto)) {
                                                                                                echo $producto = "";
                                                                                            } else {
                                                                                                echo $producto["IdUnidadMedida"];
                                                                                            } ?>" name="txtactualizarunidadmedida">

                </div>
            </div>

            <div class="col-sm-5">
                <?php
                if (isset($_GET['id'])) {
                    $varid = $_GET['id'];
                    $producto = clsControlArrayListProductoAc::medSeleccionarProductoAc($varid);
                }
                ?>
                <br>
                <!--    CAJA DE Categoritaa -->
                <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Categorita</strong></label>
                    <input id="entradacategoria" class="form-control " type="text" placeholder="escribir" value="<?php if (empty($producto)) {
                                                                                                                        echo $producto = "";
                                                                                                                    } else {
                                                                                                                        echo $producto["Categoria"];
                                                                                                                    } ?>" required>
                    <!--  -->
                    <div class="invalid-tooltip">Complete los datos</div>
                    <!--  -->
                    <input id="identradacategoria" class="form-control " type="hidden" value="<?php if (empty($producto)) {
                                                                                                    echo $producto = "";
                                                                                                } else {
                                                                                                    echo $producto["IdCategoriaProducto"];
                                                                                                } ?>" name="txtactualizarcategoria">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        $Producto = clsControlArrayListProducto::medSeleccionarProducto();
        ?>
        <div class=" col-10 ">

            <table id="datatablesSimple" class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>UnidadMedida</th>
                        <th>Categoria</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Producto as $indice => $valor) : ?>
                        <tr>
                            <td><?php echo $valor["Marca"]; ?></td>
                            <td><?php echo $valor["Nombre"]; ?></td>
                            <td><?php echo $valor["UnidadMedida"]; ?></td>
                            <td><?php echo $valor["Categoria"]; ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="incio.php?paginas=ActualizarProducto&id=<?php echo $valor['IdProducto']; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                </div>


                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
          
            
        </div>
        <div class="col-2 ">
            <br>
            <br>
            <br>

            <div class="d-grid gap-2 col-8 mx-auto">
                <button type="submit" class="btn btn-primary" name="btnActualizarProducto">Actualizar producto</button>

            </div>
            <br>
            <br>
            <br>
            <br>

        </div>

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
            $Actualizarproducto = clsControlUpdateProductoAc::medControlUpdateProductoAc();
            if ($Actualizarproducto == "ok") {
                echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";

                        echo "<script>swal('Felicidades!', 'Datos Actualizados', 'success');</script>";
                        echo "<script>  setTimeout(function(){window.location='incio.php?paginas=ActualizarProducto';}, 2000);</script>";

                
            }
            ?>
<script>

</script>

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