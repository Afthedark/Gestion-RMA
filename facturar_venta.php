<?php
session_start();
//Facturar Ventas
include "conexion.php";

$id_venta = $_REQUEST["id"];
$con = "SELECT estado FROM venta where id_venta=$id_venta";
$query = mysqli_query($conection, $con);
$result = mysqli_fetch_array($query);
if ($result[0] == 1) {
    $query_delete = mysqli_query(
        $conection,
        "UPDATE venta SET estado=2 where  id_venta=$id_venta and id_usuario=" .
            $_SESSION["idUser"] .
            ""
    );
    if ($query_delete) {
        header("location: ventas_registradas.php");
    } else {
        echo "Error al Facturar";
    }
} else {
    header("location: ventas_registradas.php");
}

?>
