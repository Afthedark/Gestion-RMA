<?php 
include("conexion.php");
session_start();
$nombre=$_GET['txtname'];
$apellido=$_GET['txtape'];
$ci=$_GET['txtci'];
$ext=$_GET['cboext'];
$dir=$_GET['txtdir'];
$tel=$_GET['txttel'];
$email=$_GET['txtemail'];

//$codusr=split(" ",$nombre);
//$codigo=substr($codusr[1],0,1).$codusr[0].rand(100,999);

$tipo=$_GET['rbtusu'];
//$nomb=strtoupper($_GET['txtname']);
$clv1=$_GET['txtclv1'];
$clv2=$_GET['txtclv2']; 

//echo $nombre.$apellido.$ci.$ext.$dir.$tel.$email.$tipo.$clv1.$clv2;

if($clv1==$clv2)
 {
 	$clv=md5($clv1);
$registro=("INSERT INTO usuario (id_usuario, nombre, apellidos, ci, direccion, telefono, email, clave, activo, id_rol) VALUES (NULL, '$nombre', '$apellido', '$ci.$ext', '$dir', '$tel', '$email', '$clv', '1', '$tipo')");

$ejec=mysqli_query($conection,$registro);
 
	 if($ejec){
		echo "Usuario registrado:<b>".$ci."</b>";
	 };
}

else{
 echo "La contrasenas no coinciden...";
 $mensaje="La contraseñas no coinciden...";
 header("location:regitro_de_usuario.php?msj=$mensaje");
 }?>


