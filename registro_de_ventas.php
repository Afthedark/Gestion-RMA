<?php 
session_start();
if($_SESSION['rol']!=1 && $_SESSION['rol']!=3 ){
  header('location: inicio.php');
}
include "include/head.php";
include "include/menu_superior.php";
include "include/menu_principal.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
   <!-- Main content -->
   
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-6 offset-md-3">
               <!-- general form elements -->
               <div class="card">
                    <div class="card-body register-card-body">
                        <h3 class="login-box-msg">Formulario de Registro de Ventas</h3>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="pr_regventa.php"  method="GET">
                            <div class="card-body " >
                                <div class="form-group input-group-append">
                                <input type="text" class="form-control" name="numserie" placeholder="Número de Serie" required autocomplete="off">
                                 <span class="text-danger">  *</span>
                                </div>
                                
                                 
                                <div class="form-group input-group-append">
                                <input class="form-control"  type="text" name="fecha" placeholder="Tiempo de garantía" required autocomplete="off" onclick="ocultarError();" onfocus="(this.type='date')"><span class="text-danger">  *</span> 
                                </div>


                                <div class="form-group input-group-append">
                                <input class="form-control" type="text" name="codpro" placeholder="Código de Producto" required autocomplete="off"><span class="text-danger">  *</span> 
                                </div>
                            </div>
                            <!-- /.card-body -->
                                    
                            <center>  
                                <?php 
                                    if(isset($_GET['msj'])){
                                       $mensaje=$_GET['msj'];
                                        echo '<b class=msj>'.$mensaje.'</b>';
                                    }
                                    if(isset($_GET['msj2'])){
                                       $mensaje=$_GET['msj2'];
                                        echo '<b class=msj2>'.$mensaje.'</b>';
                                    }
                                ?>
                                <br>
                                <button type="submit" class="btn btn-primary btn-lg">Registrar</button>
                            </center>
                        </form>
                    </div>
                </div>
               <!-- /.card -->
            </div>
            <!--/.col (left) -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
<style type="text/css">
    .msj{
        color: red;
    }
    .msj2{
        color: green;
    }
</style>   
   <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
  <?php
  include "include/footer.php"
  ?>