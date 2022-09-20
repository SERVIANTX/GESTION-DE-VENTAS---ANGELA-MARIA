<?php
session_start();
$empleado = $_SESSION["empleado"];
$cargo =  $_SESSION["cargo"];


?>
<?php
if (isset($_POST["cerrarsesion"])) {
  $_SESSION["empleado"] = "";
  $_SESSION["cargo"] = "";
  header('Location: ../index.php');
}
?>
<?php
if (empty($_SESSION["empleado"])) {
  header('Location: ../index.php');
}

?>
<?php
require_once "../modelos/ModelInsertProveedor.php";
require_once "../controladores/ControlArrayProveedor.php";
require_once "../modelos/ModelInsertEmision.php";
require_once "../controladores/ControlArrayEmision.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

  <meta name="description" content="" />
  <meta name="author" content="" />

  <link rel="icon" type="image/jpg" href="asset/img/loginimg/3.svg">
  <link rel="stylesheet" href="boostrack/css/bootstrap.min.css" />

  <link rel="stylesheet" href="asset/css/estiloprueba.css" />
  <link rel="stylesheet" href="asset/css/dashboarestilos.css" />
  <link rel="stylesheet" href="asset/css/yestilosdhasboard.css" />




  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
  <title>dashboard</title>

</head>



<!--  encabezado -->


<form method="POST">
  <div class=" colorencabezado">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <p>&nbsp &nbsp &nbsp</p>
        <a href="incioVendedor.php?paginas=dashboardVenta"><img style="width:80px; height:60px;" src="asset/img/loginimg/Logo8.png" class="img-fluid rounded-circle avatar mr-2"/></a>
        <p>&nbsp &nbsp &nbsp </p>
        <img style="width:30px; height:30px;" src="asset/img/svg/user2.png" class="img-fluid rounded-circle avatar mr-2" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $empleado ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              
                <li><button type="submit" name="cerrarsesion" class="dropdown-item"><img style="width:15%;" src="asset/img/loginimg/power.png">&nbsp &nbspCERRAR SESION &nbsp &nbsp &nbsp</button></li>
              </ul>
            </li>
          </ul>
          <p>&nbsp &nbsp &nbsp</p>
          <a style="color:grey;">CARGO:&nbsp <?php echo $cargo ?></a>
          <p>&nbsp &nbsp &nbsp</p>
        </div>
      </div>
    </nav>
  </div>
  <div>
    <nav style=" padding-top: 1px" class="navbar">
      <ul class="nav nav-tabs">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cliente</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="incioVendedor.php?paginas=IngresarClienteV">Agregar</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="incioVendedor.php?paginas=ActualizarClienteV">Actualizar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</form>

<!--  cuerpo -->
<div class=" container-fluid colorcuerpo">

  <?php

  if (isset($_GET["paginas"])) {
    if (
      $_GET["paginas"] == "venta" ||
      $_GET["paginas"] == "dashboardVenta" ||
      $_GET["paginas"] == "IngresarClienteV" ||
      $_GET["paginas"] == "ActualizarClienteV" ||
      $_GET["paginas"] == "ActualizarProductoV"
    ) {
      include "paginas/" . $_GET["paginas"] . ".php";
    }
  } else {
    include "paginas/dashboardVenta.php";
  }

  ?>


</div>



<div class="container-footer">
  <footer class="text-center text-lg-start" style="background-color: #3A3838;">
  <br>
    <form method="GET">
      <div class="row">
      <div class="col-sm-4 " >

      </div>
        <div class="col-sm-2 " style="text-align:center">

          <a href="incioVendedor.php?paginas=venta"><button type="button" class="btn btn-dark btn-circle btn-xl"><img src="asset/img/iconos/ventas.svg" width="50" height="50">
            </button></a>
          <figcaption class="text-white p-3">VENTA</figcaption>
        </div>
        <div class="col-sm-2 " style="text-align:center">
          <a href="incioVendedor.php?paginas=dashboardVenta">
            <button type="button" class="btn btn-dark btn-circle btn-xl"><img src="asset/img/iconos/reporte.svg" width="50" height="50">
            </button></a>
          <figcaption class="text-white p-3">DASHBOARD </figcaption>
        </div>
      </div>

    </form>

    <div class=row>
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Empresa:
        <a class="text-white" href="">MinimarketAngelaMaria.com</a>
      </div>
    </div>
  </footer>

</div>
<!-- End of .container -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="boostrack/js/datatables-simple-demo.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
</script>





</html>