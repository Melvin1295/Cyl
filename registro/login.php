<!--
Author: Softbarz @ Todos los Derechos Reservados
Jonathan Benavides Gonzalez RPC:962375665
-->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CyL | Login</title>
  <!--Estilos propios-->
  <link rel="stylesheet" type="text/css" href="css/style_login.css">
  <!--Framework BootStrap-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--Favicon-->
  <link rel="icon" type="image/png" href="images/favicon/favicon.ico">
  <!--Estilos para Iconos-->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <!--Fuentes de Google-->
  <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
  <!-- jQuery (necesario para Bootstrap JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--JavaScript incluido en el sistema-->
  <script src="js/bootstrap.min.js"></script>
</head>

<body class="bodLogin">

  <div class="container-fluid">
    <div class="row">

      <form class="form-horizontal" action="procesar.php?modo=login" method="POST" id="formulario">
      
          <div class="col-sm-4"></div><!-- Brinda el espacio para colocar el formulario en el centro -->

          <!--Div ancho de fomulario-->
            <div class="col-sm-4 frmLogin">
              <div class="row">
                <div class="cabFrmLogin">
                  <p class="titLogin">CyL | GESTIÓN DEL TALENTO HUMANO</p>
                </div>
              </div>
              <!-- Cuerpo del formulario -->
              <div class="col-sm-12 bodFrmLogin">
                
                <p class="subTitLogin">
                  <?php
                    if (isset($_SESSION['error'])){
                      echo $_SESSION['error'];
                      session_destroy();
                    }
                  ?>
                </p>

                <div class="center" style="margin-bottom: 20px">
                  <img src="images/logocyl.png" width="150">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="user" placeholder="Usuario">
                </div>

                <div class="form-group">
                  <input type="password" class="form-control" name="passw" placeholder="Contraseña">
                </div>
                <!-- Input oculto para identificar el formulario -->
                <div class="form-group">
                  <input type="hidden" name="login" value="1">
                </div>
                <!-- Fin de input oculto -->

                <!-- Boton Login de formulario -->
                <div class="center">
                  <button id="btn" type="submit" class="btnLogin">
                    Login <span class="fa fa-angle-double-right"></span>
                  </button>
                </div>
                <!-- Fin de boton Login de formulario -->
              </div>
              <!-- Fin cuerpo del formulario -->
            </div>
          </div>
      </form>

    </div>
  </div>

</body>

</html>