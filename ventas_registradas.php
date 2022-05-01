<?php 
session_start();
if($_SESSION['rol']!=1 && $_SESSION['rol']!=3 )
{
  header('location: inicio.php');
}
include "include/head.php";
include "include/menu_superior.php";
include "include/menu_principal.php";
?>
  <div class="content-wrapper">

</div>
<?php
  include "include/footer.php"
?>

