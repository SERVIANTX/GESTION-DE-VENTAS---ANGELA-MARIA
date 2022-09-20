<?php  SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" href="vistas/asset/css/logineestilos.css" />
  <link rel="stylesheet" href="vistas/boostrack/css/bootstrap.min.css" />

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<body class="colorbody">
  <div>


    <!-- el cuerpo -->
    <div>

      <main class="centrarlogin">

        <div class="contenedor--todo">
          <div class="caja--trasera">
                <div class="caja--trasera-login">
                    <h3> ANGELA MARIA</h3>
                    <img src="vistas/asset/img/loginimg/ANGELA MARIA.svg" width="250px">
                    <button id="btn-inisiar-sesion"> Regresar >></button>
                </div>
                <div class="caja--trasera-register">
                    <h3 style="margin-left: 65px; margin-top: 45px;">¡BIENVENIDO! </h3>
                    <p style="margin-left: 65px;">Inicie Sesion para entrar al sistema.</p>
                    
                    <button style="margin-left: 65px;" id="btn-Registrarse">Iniciar Sesion</button>
                </div>
            </div>
          <!--Formulario de login y Registre-->
          <div class="contenedor--login-register">
            <!--Login-->
            <form action="" class="formulario-register" method="POST">
                     <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="txtusuario">
                    <input type="password" placeholder="Contraseña" name="txtcontra">
                    <button name="btnentrar">Entrar</button>


              <!--   /* $VarLogin = new LoginPost();
       $VarLogin ->LoginVariables(); */ -->



           </form>

            <!--Registro-->
            <form action="" class="formulario-login">
              <h2>ANGELA MARIA</h2>
              <img style="margin-left: 80px;"class="imgc" src="vistas/asset/img/loginimg/1.png" width="250px">

          </div>
        </div>
      </main>


    </div>

    </form>
  </div>

</body>
<script src="vistas/asset/js/loginjs.js"></script>
<script src="vistas/boostrack/js/jquery-3.6.0.min.js"></script>
<script src="vistas/boostrack/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</html>



<?php


            

            if(isset($_POST["btnentrar"]))
            {
              $var1 = array("NombreUsuario" => $_POST["txtusuario"],
              "Contrasenia"=> $_POST["txtcontra"]);


              if($var1==null)
              {
               
              }
              else
              {
                              list($VarLogin4,$VarLogin1,$VarLogin2,$VarLogin3)= clsControlArrayIniciarSecion::medArrayInicarSesion();
                if($VarLogin3 =="ok")
                      {

                        
                       
                                $_SESSION["cargo"] = $VarLogin1['0'];
                                $_SESSION["empleado"] = $VarLogin2['0'];
                                $_SESSION["idempelado"] = $VarLogin4['0'];
                              
                                  if ( $_SESSION["cargo"] == "ADMIN") 
                                  {
                                    echo "<script>swal('Bienvenido!', 'A Minimarket Angela Maria', 'success');</script>";

                                    echo "<script>  setTimeout(function(){window.location='vistas/incio.php';}, 2000);</script>";
                                  
                                  
                                  
                                  }
                                  elseif( $_SESSION["cargo"] == "VENDEDOR"){
                                    header('Location: vistas/incioVendedor.php');
                                  }
                                  elseif( $_SESSION["cargo"] == "ALMACENERO"){
                                    header('Location: vistas/incioAlmacenero.php');
                                  }
                                  {
                                    
                                  }
                             
                    }
            
                else
                {
        echo "<script> if(window.history.replaceState()) 
                                {
                                  window.history.replaceState(null,null,window.location.herf)
                                }
                                </script>";
                                  echo "<script>swal('Oops!', 'Ususario o Pasword Incorrectos!', 'error');</script>";
                }
              }
              
            }


           
              
            ?>

