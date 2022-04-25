<?php 
session_start();
if($_SESSION['rol']!=1 && $_SESSION['rol']!=2  && $_SESSION['rol']!=4)
{
  header('location: inicio.php');
}
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

