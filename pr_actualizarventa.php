<?php 
include("conexion.php");
session_start();
$codventa=$_GET['idventa'];
$numserie=$_GET['numserie'];
$fechag=$_GET['fecha'];
$codpro=$_GET['codpro'];
$hoy=date("Y/m/d"); 
$id=$_SESSION['idUser'];
$registro=("UPDATE venta SET num_serie= '$numserie', fecha_garantia= '$fechag', codigo_producto= '$codpro' WHERE venta.id_venta=$codventa");
	$ejec=mysqli_query($conection,$registro);	 
 if ($ejec) {
 	header("location:ventas_registradas.php");
 }
 ?>