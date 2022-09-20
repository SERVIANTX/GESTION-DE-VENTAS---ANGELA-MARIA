<?php

require_once "../modelos/ModelInsertProveedor.php";
require_once "../controladores/ControlArrayProveedor.php";


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
<form class="needs-validation" method="POST" novalidate>

  <br>
  <div style="background-color: #fffbf4; width:750px;height:370px; margin-left: auto; margin-right:auto;">
  <p style="font-size:25px;" class="bg-dark text-white text-center">.: Agregar Proveedor :.</p>
    <div class="row">
    
      <div class="col-sm-1 ">
      </div>
      <div class="col-sm-4 ">
      <br>
        <!--  CAJA DE Nombre Empresa -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Nombre Empresa</strong></label>
          <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" name="txtempresa" onkeypress="return sololetras(event)" onpaste="return false" required>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
        </div>
      </div>

      <div class="col-sm-3 ">
      <br>
        <!--    CAJA DE RUC -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>RUC</strong></label>
          <input maxlength="11" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" name="txtruc" onkeypress="return solonumeros(event)" onpaste="return false" required>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
        </div>

      </div>
      <div class="col-sm-3">
      <br>
        <!--  CAJA DE Telefono -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Telefono</strong></label>
          <input class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" name="txttelefono" onkeypress="return solonumeros(event)" onpaste="return false" required>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-1 ">
      </div>
      <div class="col-sm-5 ">
        <!--    CAJA DE RUC -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Direccion</strong></label>
          <input onKeyUP="this.value=this.value.toUpperCase();" class="form-control margencaja" type="text" id="formGroupInputSmall" placeholder="Escribe" name="txtdireccion" required>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
        </div>
      </div>
      <div class="col-sm-5   ">
        <!--  CAJA DE Telefono -->
        <div class="mb-3 position-relative"><label class="form-label" for="formGroupInputSmall"><strong>Correo</strong></label>
          <input class="form-control margencaja" type="email" id="formGroupInputSmall" placeholder="Escribe" name="txtcorreo" required>
          <!--  -->
          <div class="invalid-tooltip">Complete los datos</div>
          <!--  -->
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
          <button type="submit" class="btn btn-primary" name="btnGuardarProveedor">Guardar</button>
        </div>
      </div>
    </div>
  </div>
</form>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$guardarproveedor = clsControlArrayProveedor::medControlArrayProveedor();
if ($guardarproveedor == "ok") {
  echo "<script>swal('Felicidades!', 'Datos Agregados', 'success');</script>";
  echo "<script>  setTimeout(function(){window.location='incioAlmacenero.php?paginas=entrada';}, 2000);</script>";

  echo "<script>
                            if(window.history.replaceState)
                            {
                                window.history.replaceState(null,null,window.location.href);
                            }
                        </script>";
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