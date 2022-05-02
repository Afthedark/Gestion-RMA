 <?php
session_start();
if ($_SESSION["rol"] != 1 && $_SESSION["rol"] != 3) {
    header("location: inicio.php");
}
include "include/head.php";
include "include/menu_superior.php";
include "include/menu_principal.php";
$id = $_GET["id"];
$iduser = $_SESSION["idUser"];
$con = "SELECT * FROM venta where id_venta=$id and id_usuario=$iduser and estado=1";
$query = mysqli_query($conection, $con);
$result = mysqli_num_rows($query);
if ($result > 0) {
    $dato = mysqli_fetch_array($query); ?>
  <div class="content-wrapper">
    <br>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="card">
                    <div class="card-body register-card-body">
                        <h3 class="login-box-msg">Formulario de Modificación de Ventas</h3>
                        <form action="pr_actualizarventa.php" method="GET">
                            <input type="text" name="idventa"  value="<?= $id ?>" readonly hidden>
                            <div class="card-body " >
                                <div class="form-group input-group-append">
                                    <input type="text" class="form-control" name="numserie" placeholder="Número de Serie" 
                                    value="<?= $dato[1] ?>" required autocomplete="off">
                                     <span class="text-danger">  *</span>
                                </div>        
                                <div class="form-group input-group-append">
                                    <input class="form-control"  type="text" value="<?= $dato[3] ?>" name="fecha" placeholder="Tiempo de garantía" required autocomplete="off" onclick="ocultarError();" onfocus="(this.type='date')"><span class="text-danger">  *</span> 
                                </div>
                                <div class="form-group input-group-append">
                                <input class="form-control" type="text" value="<?= $dato[4] ?>" name="codpro" placeholder="Código de Producto" required autocomplete="off"><span class="text-danger">  *</span> 
                                </div>
                            </div>                                
                            <center>  
                                <?php
                                if (isset($_GET["msj"])) {
                                    $mensaje = $_GET["msj"];
                                    echo "<b class=msj>" . $mensaje . "</b>";
                                }
                                if (isset($_GET["msj2"])) {
                                    $mensaje = $_GET["msj2"];
                                    echo "<b class=msj2>" . $mensaje . "</b>";
                                }
                                ?>
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg">Modificar</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </section>
<style type="text/css">
    .msj{
        color: red;
    }
    .msj2{
        color: green;
    }
</style>   
</div>
<?php
} else {
    echo "<meta http-equiv='Refresh' content='0;ventas_registradas.php'>";
}
include "include/footer.php";
?>

 