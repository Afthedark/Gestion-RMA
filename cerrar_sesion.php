<?php 
session_start();
session_destroy();
header('location: ./');
?>
<?php 
include "include/head.php";
include "include/menu_superior.php";
include "include/menu_principal.php";
?>
