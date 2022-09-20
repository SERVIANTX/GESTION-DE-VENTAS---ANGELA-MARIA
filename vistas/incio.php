<?php
session_start();
$empleado = $_SESSION["empleado"];
$cargo =  $_SESSION["cargo"] ;

    
?>
<?php
    if (isset($_POST["cerrarsesion"])) {
        $_SESSION["empleado"] = "" ;
        $_SESSION["cargo"] = "" ;
        header('Location: ../index.php');
    }
?>
<?php
if ( empty($_SESSION["empleado"])){
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
  
  <a href="incio.php?paginas=dashboard"><img style="width:80px; height:60px;" src="asset/img/loginimg/Logo8.png" class="img-fluid rounded-circle avatar mr-2"/></a>
    <p>&nbsp &nbsp &nbsp  </p> 
    <img style="width:30px; height:30px;" src="asset/img/svg/user2.png" class="img-fluid rounded-circle avatar mr-2"/>
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
           
            <li><button type="submit" name="cerrarsesion" class="dropdown-item"><img style="width:15%;"  src="asset/img/loginimg/power.png">&nbsp &nbspCERRAR SESION &nbsp &nbsp &nbsp</button></li>
          </ul>
        </li>
      </ul>
      <p>&nbsp &nbsp &nbsp</p>
      <a style="color:grey;">CARGO:&nbsp  <?php echo $cargo ?></a>
    <p>&nbsp &nbsp &nbsp</p>
    </div>
  </div>
</nav>
</div> 
<div >
<nav style=" padding-top: 1px" class="navbar">
<ul class="nav nav-tabs">
  <li class="nav-item dropdown">
    <a  class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cliente</a>
    <ul class="dropdown-menu">
      <li><a  class="dropdown-item" href="incio.php?paginas=IngresarCliente">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarCliente">Actualizar</a></li>
    </ul>
  </li>
  <li style="" class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Comprobante Venta</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarComprobanteVenta">Agregar</a></li>
       <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarComprobanteVenta">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Proveedor</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarProveedor">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarProveedor">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Producto</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarProducto">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarProducto">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Categoria</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarCategoria">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarCategoria">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Unidad de Medida</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarUnidadMedida">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarUnidadMedida">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Documento de Emision</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarDocEmision">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarDocEmision">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cargo Empleado</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=IngresarCargoEmpleado">Agregar</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ActualizarCargo">Actualizar</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Reportes</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="incio.php?paginas=reporte">Reporte de Ventas</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteEmpleados">Reporte de Empleados</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteClientes">Reporte de Clientes</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteClientesFrecuentes">Reporte de Clientes mas frecuentes</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteProductos">Reporte de Productos</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteProductosMasVendidos">Reporte de Productos mas vendidos</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=ReporteProveedores">Reporte de Proveedores</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteStock">Reporte de Stock</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteKardex">Reporte de Kardex</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="incio.php?paginas=reporteLoteFechasV">Reporte de Fecha de Vencimiento </a></li>
    </ul>
  </li>
</ul>
</nav>

</div>
</form>
<!--  cuerpo -->
<!-- style=" height: 100vh;" -->
<div  class=" container-fluid colorcuerpo">

    <?php

        if(isset($_GET["paginas"]))
        {
            if(
                $_GET["paginas"]=="venta" ||
                $_GET["paginas"]=="entrada"||
                $_GET["paginas"]=="salida" ||
                $_GET["paginas"]=="empleado"||
                $_GET["paginas"]=="plantillakadex"||
                $_GET["paginas"]=="dashboard"||
                $_GET["paginas"]=="reporte"||
                $_GET["paginas"]=="reporteClientes"||
                $_GET["paginas"]=="reporteEmpleados"||
                $_GET["paginas"]=="reporteProductos"||
                $_GET["paginas"]=="reporteProductosMasVendidos"||
                $_GET["paginas"]=="reporteClientesFrecuentes"||
                $_GET["paginas"]=="IngresarProveedor"||
                $_GET["paginas"]=="IngresarDocEmision"||
                $_GET["paginas"]=="IngresarCliente"||
                $_GET["paginas"]=="IngresarComprobanteVenta"||
                $_GET["paginas"]=="IngresarCargoEmpleado"||
                $_GET["paginas"]=="IngresarProducto"||
                $_GET["paginas"]=="IngresarCategoria"||
                $_GET["paginas"]=="IngresarUnidadMedida"||
                $_GET["paginas"]=="ActualizarProveedor"||
                $_GET["paginas"]=="ActualizarCliente"||
                $_GET["paginas"]=="ActualizarComprobanteVenta"||
                $_GET["paginas"]=="ActualizarCategoria"||
                $_GET["paginas"]=="ActualizarUnidadMedida"||
                $_GET["paginas"]=="ActualizarDocEmision"||
                $_GET["paginas"]=="ActualizarCargo"||
                $_GET["paginas"]=="ActualizarProducto"||
                $_GET["paginas"]=="ActualizarEmpleado"||
                $_GET["paginas"]=="ReporteProveedores"||
                $_GET["paginas"]=="reporteStock"||
                $_GET["paginas"]=="reporteKardex"||
                $_GET["paginas"]=="reporteLoteFechasV"

        )
            {
                include "paginas/".$_GET["paginas"].".php";
            }
        }
        else
        {
            include "paginas/dashboard.php";
        }

?>


</div>



<div class="container-footer container-fluid "style="background-color: #3A3838;">
  <footer class="text-center text-lg-start" style="background-color: #3A3838;">
  <br>
  <div class="container d-flex justify-content-center py-3">
    <form method="GET">

      <div class="row">

      <div class="col-sm-2 " style="text-align:center">
          <a href="incio.php?paginas=venta"><button type="button" class="btn btn-dark btn-circle btn-xl" title="Ventas"><img src="asset/img/iconos/ventas.svg" width="50" height="50">
        </button>  
          </a>
          <figcaption class="text-white p-3"  >VENTA</figcaption>
        </div>
        <div class="col-sm-2 " style="text-align:center">
          <a href="incio.php?paginas=entrada" ><button type="button" class="btn btn-dark btn-circle btn-xl" title="Entrada"><img src="asset/img/iconos/proveedor.svg" width="50" height="50">
            </button>
          </a>
          <figcaption class="text-white p-3"  >ENTRADA</figcaption>

        </div>

        <div class="col-sm-2 " style="text-align:center">
          <a href="incio.php?paginas=salida"><button type="button" class="btn btn-dark btn-circle btn-xl" title="Salida"><img src="asset/img/iconos/caja.svg" width="50" height="50">
            </button></a>
            <figcaption class="text-white p-3"  >SALIDA</figcaption>
        </div>

        <div class="col-sm-2 " style="text-align:center">
          <a href="incio.php?paginas=empleado"><button type="button" class="btn btn-dark btn-circle btn-xl" title="Empleado"><img src="asset/img/iconos/empleado.svg" width="50" height="50">
            </button></a>
            <figcaption class="text-white p-3"  >EMPLEADO </figcaption>
        </div>

        <div class="col-sm-2 " style="text-align:center">
          <a href="incio.php?paginas=plantillakadex"><button type="button" class="btn btn-dark btn-circle btn-xl" title="Kardex"><img src="asset/img/iconos/reporte.svg" width="50" height="50">
            </button></a>
            <figcaption class="text-white p-3"  >KARDEX</figcaption>
        </div>

        <div class="col-sm-2 " style="text-align:center">
          <a href="incio.php?paginas=dashboard">
            <button type="button" class="btn btn-dark btn-circle btn-xl" title="Dashboard"><img src="asset/img/iconos/dashboard.svg" width="50" height="50">
            </button></a>
            <figcaption class="text-white p-3"  >DASHBOARD </figcaption>
        </div>
      </div>

    </form>
    </div>
    <div class=row>
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        Empresa:
        <a class="text-white" href="">MinimarketAngelaMaria.com</a>
      </div>
    </div>
    <!-- Copyright -->
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