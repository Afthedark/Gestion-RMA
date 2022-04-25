<?php 
include("conexion.php");
session_start();
$nombre=$_GET['txtname'];
$apellido=$_GET['txtape'];
$ci=$_GET['txtci'];
 
$dir=$_GET['txtdir'];
$tel=$_GET['txttel'];
$email=$_GET['txtemail'];

$tipo=$_GET['rbtusu'];
 
$clv1=$_GET['txtclv1'];
$clv2=$_GET['txtclv2']; 

if($clv1==$clv2)
 {
 	$clv=md5($clv1);
$registro=("INSERT INTO usuario (id_usuario, nombre, apellidos, ci, direccion, telefono, email, clave, activo, id_rol) VALUES (NULL, '$nombre', '$apellido', '$ci', '$dir', '$tel', '$email', '$clv', '1', '$tipo')");

$ejec=mysqli_query($conection,$registro);
 
	 if($ejec){
         if($tipo==2){
            $rol="Técnico";
         }
         if($tipo==3){
            $rol="Vendedor";
         }
         if($tipo==4){
            $rol="Cliente";
         }
         $mensaje="Se creó la cuenta de usuario tipo $rol";
        header("location:registro_de_usuarios.php?msj2=$mensaje");
	 };
}

else{
 echo "La contraseñas no coinciden...";
 $mensaje="Ambas contraseñas deben ser iguales";
 header("location:registro_de_usuarios.php?msj=$mensaje");
 }?>


