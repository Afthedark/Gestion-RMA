<?php
include "conexion.php";
session_start();
$numserie = $_GET["numserie"];
$fechag = $_GET["fecha"];
$codpro = $_GET["codpro"];
$hoy = date("Y/m/d");
$id = $_SESSION["idUser"];
$con = "SELECT * FROM venta where num_serie='" . $numserie . "'";
$query = mysqli_query($conection, $con);
$result = mysqli_num_rows($query);
if ($result > 0) {
    $mensaje = "El número de serie del producto ya fue registrado";
    header("location:registro_de_ventas.php?msj=$mensaje");
} else {
    $registro = "INSERT INTO venta (id_venta,num_serie,fecha_venta,fecha_garantia,codigo_producto,estado,id_usuario) VALUES (NULL, '$numserie', '$hoy', '$fechag', '$codpro', '1', '$id')";
    $ejec = mysqli_query($conection, $registro);
    if ($ejec) {
        $mensaje = "Se registró la venta correctamente";
        header("location:registro_de_ventas.php?msj2=$mensaje");
    }
}
?>