<<<<<<< Updated upstream
<?php 
include("conexion.php");
session_start();
$codventa=$_GET['idventa'];
$numserie=$_GET['numserie'];
$fechag=$_GET['fecha'];
$codpro=$_GET['codpro'];
$hoy=date("Y/m/d"); 
$id=$_SESSION['idUser'];
 
//echo $id.$numserie.$fechag.$codpro.$hoy;

$registro=("UPDATE venta SET num_serie= '$numserie', fecha_garantia= '$fechag', codigo_producto= '$codpro' WHERE venta.id_venta=$codventa");
	$ejec=mysqli_query($conection,$registro);
	 
 if ($ejec) {
 	header("location:inicio.php");
 }


 ?>


=======
<<<<<<< HEAD
<?php 
include("conexion.php");
session_start();
$codventa=$_GET['idventa'];
$numserie=$_GET['numserie'];
$fechag=$_GET['fecha'];
$codpro=$_GET['codpro'];
$hoy=date("Y/m/d"); 
$id=$_SESSION['idUser'];
 
//echo $id.$numserie.$fechag.$codpro.$hoy;

$registro=("UPDATE venta SET num_serie= '$numserie', fecha_garantia= '$fechag', codigo_producto= '$codpro' WHERE venta.id_venta=$codventa");
	$ejec=mysqli_query($conection,$registro);
	 
 if ($ejec) {
 	header("location:inicio.php");
 }


 ?>


=======
<?php 
include("conexion.php");
session_start();
$codventa=$_GET['idventa'];
$numserie=$_GET['numserie'];
$fechag=$_GET['fecha'];
$codpro=$_GET['codpro'];
$hoy=date("Y/m/d"); 
$id=$_SESSION['idUser'];
 
//echo $id.$numserie.$fechag.$codpro.$hoy;

$registro=("UPDATE venta SET num_serie= '$numserie', fecha_garantia= '$fechag', codigo_producto= '$codpro' WHERE venta.id_venta=$codventa");
	$ejec=mysqli_query($conection,$registro);
	 
 if ($ejec) {
 	header("location:inicio.php");
 }


 ?>


>>>>>>> 932faa03224d1f4a596925ba784f4983fbe0b1fb
>>>>>>> Stashed changes
