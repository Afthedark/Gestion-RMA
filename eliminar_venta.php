<?php   
include "conexion.php";
session_start();
$id_venta= $_REQUEST['id'];
$con=("SELECT estado FROM venta where id_venta=$id_venta");
$query=mysqli_query($conection,$con);
$result=mysqli_fetch_array($query);
if($result[0] == 1){
	$query_delete=mysqli_query($conection,"UPDATE venta SET estado=0 where id_venta=$id_venta");
	if($query_delete){
		header("location: ventas_registradas.php");
	}
	else{
		echo "Error al eliminar";
	}
}
else{
	header("location: ventas_registradas.php");
}
?>