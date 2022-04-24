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
  <div class="content-wrapper">
    <div align="center" >
    
    <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
    <!-- boostrap -->
<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">  
<!-- Tema opcional -->
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
<script src="boostrap/js/bootstrap.min.js"></script>
<!-- fin boostrap --> 

</head>
<body>
<h3><i style='margin-right:10px;'></i>REGISTRAR USUARIO</h3><BR><BR>
<form class="form-horizontal" action="pr_regusuario.php" method="GET" style="width: 50vw; margin-left : 1vw; ">
    <div class="form-group">
        <label class="control-label col-xs-3">Nombre:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txtname" placeholder="Nombre" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Apellido:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txtape" placeholder="Apellido" required>
        </div>
    </div>

    <div class="form-group">
            <label class="control-label col-xs-3">CI:</label>
            <div class="col-xs-2">
                    <input class="form-control" type="text" name="txtci" placeholder="C.I." required>  
            </div>
             <label class="control-label col-xs-1">Ext:</label>
            <div class="col-xs-2">
                    <select class="form-control" name="cboext"  >  
               <option value="OR">ORURO</option>
                 <option value="LP">LAPAZ</option>
                 <option value="CB">COCHABAMBA</option>
                 <option value="SC">SANTA CRUZ</option>
                 <option value="PA">PANDO</option>
                 <option value="TJ">TARIJA</option>
                 <option value="PO">POTOSI</option>
                 <option value="CH">CHUQUISACA</option>
                 <option value="BE">BENI</option>
                    </select> 
            </div>
        </div> 
    <div class="form-group">
        <label class="control-label col-xs-3">Dirección:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txtdir" placeholder="Dirección" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Teléfono:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txttel" placeholder="Teléfono" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3">Email:</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="txtemail" placeholder="Email" required>
        </div>
    </div>
        <div class="form-group">
        <label class="control-label col-xs-3">Tipo Usuario:</label>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="rbtusu" value="2" checked>Técnico
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="rbtusu" value="3">Vendedor
            </label>
        </div>
        <div class="col-xs-2">
            <label class="radio-inline">
                <input type="radio" name="rbtusu" value="4">Cliente
            </label>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-3" >Contrasena:</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="txtclv1" placeholder="Contrasena" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="control-label col-xs-3" >Repita Contrasena:</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="txtclv2" placeholder="Contrasena" required>
        </div>
    </div> 
    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-primary" value="Enviar">
            <input type="reset" class="btn btn-default" value="Limpiar">
        </div>
    </div>

</form>
<center>
<?php 
if(isset($_GET['msj'])){
   $mensaje=$_GET['msj'];
  echo $mensaje;
}
 ?>
</center>
</body>
</html>
</div>
  </div>
  <!-- /.content-wrapper -->
  <?php
  include "include/footer.php"
  ?>

