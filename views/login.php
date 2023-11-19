<?php
  /*TODO: Llamando Cadena de Conexion */
  require_once("../config/conexion.php");

  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("../models/usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../html/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../html/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../html/dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition login-page">
      <div class="login-box">
      <!-- /.login-logo -->
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="html/index2.html" class="h1"><b>CURSOS</b>ONLINE</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Login</p>

          <form action="" method="post">
          <?php
            if (isset($_GET["m"])){
              switch($_GET["m"]){
                case "1";
                  ?>
                    <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong class="d-block d-sm-inline-block-force">Error!</strong> Datos Incorrectos
                    </div>
                  <?php
                break;

                case "2";
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      <strong class="d-block d-sm-inline-block-force">Error!</strong> Campos vacios
                    </div>
                  <?php
                break;
              }
            }
          ?>
            <div class="input-group mb-3">
              <input type="email" name="usu_correo" id="usu_correo" class="form-control" placeholder="Email" />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input
                type="password"
                name="usu_pass"
                id="usu_pass"
                class="form-control"
                placeholder="Password"
              />
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            
            <div class="row">
              <!-- /.col -->
              <div class="col-4 mx-auto">
                <input type="hidden" name="enviar" id="enviar" class="form-control" value="si">
                <button type="submit" class="btn btn-primary btn-block">
                  Iniciar sesion
                </button>
              </div>            
              <div class="col-4 mx-auto">
                <a href="../views/registro.php" class="btn btn-success">Registrate aqui</a>
              </div>
              <div class="col-4 mx-auto">
                <a href="../index.php" class="btn btn-warning">Volver a inicio</a>
              </div>
              <!-- /.col -->
            </div>         
            
          </form>

          
          <!-- /.social-auth-links -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.login-box -->

      <!-- LOGIN -->
     <!-- jQuery -->
     <script src="../html/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../html/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../html/dist/js/adminlte.min.js"></script>
  </body>
</html>