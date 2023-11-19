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
    header("Location:".Conectar::ruta()."HTML/404.html");
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
                <h1> </h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                 <li class="breadcrumb-item"><a href="#">INICIO</a></li>
                 <li class="breadcrumb-item active">Procesos</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="card">
        <div class="card-header">
          <h3 class="card-title">Mis Cursos</h3>
        </div>

        <div class="card-body">
        <button type="button" class="btn btn-primary mb-2">Crear Curso</button>
         <table id="cursos_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Curso</th>
                <th class="wd-15p">Fecha Inicial</th>
                <th class="wd-20p">Fecha Final</th>
                <th class="wd-15p">Profesor</th>
                <th class="wd-10p"></th>
              </tr>
            </thead>
            <tbody>

            </tbody>
          </table>
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
    <script type="text/javascript" src="js/tabla.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>