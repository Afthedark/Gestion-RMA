<?php   
include "conexion.php";

$id_venta= $_REQUEST['id'];
$query_delete=mysqli_query($conection,"UPDATE venta SET estado=0 where id_venta=$id_venta");
if($query_delete)
	{
		header("location: registro_de_ventas.php");
	}
	else{
		echo "Error al eliminar";
	}
?>