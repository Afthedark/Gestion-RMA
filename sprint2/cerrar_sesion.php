<?php 
session_start();
session_destroy();
header('location: CerrarSesion.html');
?>
<?php 
include "include/head.php";
include "include/menu_superior.php";
include "include/menu_principal.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "include/footer.php"
  ?>

