<?php
session_start();
if($_SESSION['rol']!=1 && $_SESSION['rol']!=2  && $_SESSION['rol']!=3 && $_SESSION['rol']!=4)
{
  header('location: ./');
}  
include "include/head.php";
include "include/menu_principal.php";
include "include/menu_superior.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
  </div>
  <?php
  include "include/footer.php"
  ?>

