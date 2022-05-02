<?php   
session_start();
include "conexion.php";

$id_venta= $_REQUEST['id'];
$query_delete=mysqli_query($conection,"UPDATE venta SET estado=2 where  id_venta=$id_venta and id_usuario=".$_SESSION['idUser']."" );
if($query_delete)
	{
		header("location: ventas_registradas.php");
	}
	else{
		echo "Error al eliminar";
	}
?>