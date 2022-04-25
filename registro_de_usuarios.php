<?php 
   session_start();
   if($_SESSION['rol']!=1 )
   {
     header('location: ./');
   }
   include "include/head.php";
   include "include/menu_superior.php";
   include "include/menu_principal.php";
   ?>
<!-- Content Wrapper. Contains page content -->
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
                        <h3 class="login-box-msg">Formulario de Registro de Usuarios</h3>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="pr_regusuario.php" method="GET">
                            <div class="card-body " >
                                <div class="form-group input-group-append">
                                <input type="text" class="form-control" name="txtname" placeholder="Nombre" required autocomplete="off">
                                 <span class="text-danger">  *</span>
                                </div>
                                
                                <div class="form-group input-group-append">
                                <input type="text" class="form-control" name="txtape" placeholder="Apellido" required autocomplete="off"><span class="text-danger">  *</span> 
                                </div>

                                <div class="form-group input-group-append">
                                <input class="form-control" type="text" name="txtci" placeholder="C.I." required autocomplete="off"><span class="text-danger">  *</span> 
                                </div>
                               
                                <div class="form-group input-group-append">
                                    <input type="text" class="form-control" name="txtdir" placeholder="Dirección" required autocomplete="off"><span class="text-danger">  *</span>
                                </div>
                                <div class="form-group input-group-append">
                                    <input type="number" class="form-control" name="txttel" placeholder="Teléfono" required autocomplete="off"><span class="text-danger">  *</span>
                                </div>
                                <div class="form-group input-group-append">
                                    <input type="text" class="form-control" name="txtemail" placeholder="Email" required autocomplete="off"><span class="text-danger">  *</span>
                                </div>
                                <div class="form-group ">
                                <label>Tipo de Usuario:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rbtusu" value="2" checked>
                                    <label class="form-check-label">Técnico de Soporte</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rbtusu" value="3">
                                    <label class="form-check-label">Vendedor</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="rbtusu" value="4">
                                    <label class="form-check-label">Cliente</label>
                                </div>
                                </div>
                                <div class="form-group input-group-append">
                                    <input type="password" class="form-control" name="txtclv1" placeholder="Contraseña" required autocomplete="off"><span class="text-danger">  *</span>
                                </div>
                                <div class="form-group input-group-append">
                                    <input type="password" class="form-control" name="txtclv2" placeholder="Repita la Contraseña" required autocomplete="off"> <span class="text-danger">  *</span>  
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
                                    <input type="reset" class="btn btn-default btn-lg" value="Limpiar">
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
<!-- /.content-wrapper -->
<?php
   include "include/footer.php"
   ?>