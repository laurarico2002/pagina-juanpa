<?php 
define( "BASE_URL", "/proyectoJP/views/");
/* Llamamos al archivo de conexion.php */
require_once("../config/conexion.php");
if (isset($_SESSION["usu_id"])){
?> 
<!DOCTYPE html>

<html lang="en">
  <head>
    <?php
     
      include ("../views/modulos/head.php");    
    ?>
    <?php
    
  /* Llamamos al archivo de conexion.php */
  require_once("../config/conexion.php");
 
  if(isset($_SESSION["usu_id"])){
    
  }else{
    /* Si no a iniciado sesion se redireccionada a la ventana principal */
    header("Location:".Conectar::ruta()."html/404.html");
  }
  
?>

  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <?php
        include('modulos/header.php');
      ?>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <?php
        include('modulos/menu.php');
      ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Perfil</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Perfil</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-tittle">Mi perfil</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-4">
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="ape_paterno">Apellido Paterno</label>
                    <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" placeholder="Ingrese su apellido paterno">
                  </div>
                </div>
                <div class="col-4">
                  <div class="form-group">
                    <label for="ape_materno">Apellido Materno</label>
                    <input type="text" class="form-control" name="ape_materno" id="ape_materno" placeholder="Ingrese su apellido materno">
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="usu_correo">Correo Electronico</label>
                      <input type="text" class="form-control" name="usu_correo" id="usu_correo" placeholder="Ingrese su correo">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                      <label for="usu_pass">Contraseña</label>
                      <input type="text" class="form-control" name="usu_pass" id="usu_pass" placeholder="Ingrese su contraseña">
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label>Sexo</label>
                    <select class="form-control select2" name="sexo" id="sexo" data-placeholder="Seleccione">
                      <option label="Seleccione"></option>
                      <option value="F">Femenino</option>
                      <option value="M">Masculino</option>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese su telefono">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-secondary" id="btnactualizar">Actualizar</button>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      

      <?php
        include('modulos/footer.php');
      ?>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php
      include('modulos/js.php');
    ?>
    <script type="text/javascript" src="js/perfil.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>