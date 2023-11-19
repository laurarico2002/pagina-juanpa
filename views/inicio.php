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
                <h1>AULAS VIRTUALES</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">AULAS VIRTUALES</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="datotal"></h3>

                <p>TOTAL CURSOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="usus_total"></h3>

                <p>TOTAL USUARIOS</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="prof_total"></h3>

                <p>TOTAL PROFESORES</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
    <script type="text/javascript" src="js/inicio.js"></script>
    <script type="text/javascript" src="js/tabla.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  //header("Location:".Conectar::ruta()."views/404.php");
}
?>