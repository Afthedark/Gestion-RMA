
<?php
session_start();
  $alert='';
  if(!empty($_SESSION['active']))
  {
      header('location: index.php');   
  }
  else
  {


  if(!empty($_POST))
  {
    if(empty($_POST['usuario'])|| empty($_POST['clave']))
    {
      $alert='Ingrese su usuario y clave';
    }
    else
    {
      require_once"conexion.php";

      $user=mysqli_real_escape_string($conection,$_POST['usuario']);
      $pass=md5(mysqli_real_escape_string($conection,$_POST['clave']));

      $query=mysqli_query($conection,"select * from usuario where ci='$user'and clave='$pass'");
      mysqli_close($conection);
      $result=mysqli_num_rows($query);
      if ($result > 0)
      {
        $data=mysqli_fetch_array($query);
          
        $_SESSION['active']=true;
        $_SESSION['idUser']=$data['id_usuario'];
        $_SESSION['nombre']=$data['nombre'];
        $_SESSION['apellido']=$data['apellidos'];        
        $_SESSION['user']=$data['ci'];
        $_SESSION['rol']=$data['id_rol'];

        header('location: inicio.php');
      }
      else
      {
        $alert='Usuario y/o contraseña no válido';
        session_destroy();
      }
    }
  }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <center><img src="logo/logo ONECOMPANY color.png" width="200" height="100">
      <p class="login-box-msg">Ingresa tus datos para Iniciar Sesion</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="usuario" class="form-control" placeholder="Ingrese CI" required autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
          <span class="text-danger">*</span>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="clave" class="form-control" placeholder="Ingrese Contraseña" required autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          <span class="text-danger">*</span>
        </div>
        <div class="row">
          <div class="col-8">
         
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
        <br>
        <center>  <?php 
            echo '<span style="color:red">'.$alert.'</span>';
           ?> </center>
        <br>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
