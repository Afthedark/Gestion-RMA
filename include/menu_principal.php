<?php 
if(!isset($_SESSION)){
 session_start();
}
include "./conexion.php";
 ?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
      <center><img src="dist/img/logo-white.png" alt="Logo" width="150"></center>
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar0.png" class="img-circle elevation-2" alt="User Image" height="160px">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['nombre'].'-'.$_SESSION['apellido']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="inicio.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <?php 
            if($_SESSION['rol']==1)
            {
            ?>
          <li class="nav-item">
            <a href="registro_de_usuarios.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>

              <p>
                Registro de usuarios
              </p>
            </a>
          </li>
          <?php 
          } 
          ?>
          <?php 
            if($_SESSION['rol']==3)
            {
            ?>
          <li class="nav-item">
            <a href="registro_de_clientes.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>

              <p>
                Registro de clientes
              </p>
            </a>
          </li>
          <?php 
          } 
          ?>
          <?php 
            if($_SESSION['rol']==1 || $_SESSION['rol']==3)
            {
            ?>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Módulo de ventas
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="registro_de_ventas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registrar Venta</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="ventas_registradas.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ventas Registradas</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php 
          } 
          ?>
          <?php 
            if($_SESSION['rol']==2 || $_SESSION['rol']==1 || $_SESSION['rol']==4)
            {
            ?>
          <li class="nav-item">
            <a href="gestion_de_rma.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Gestion de RMA
              </p>
            </a>
          </li>
          <?php 
          } 
          ?>
          <li class="nav-item">
            <a href="reportes.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reportes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="cerrar_sesion.php" class="nav-link">
              <i class="nav-icon fas fa-door-open"></i>

              <p>
                Cerrar sesión
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>