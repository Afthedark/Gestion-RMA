
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
<html>
<head>
  <meta charset="utf-8">
  <title>login sistema de RMA</title>

  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>

  
<div id="wrap">
  <div id="regbar">

    <div id="navthing" align="center" style="margin-left: 37%; margin-right: 37%; margin-top: 10%; border: 3px solid MediumPurple;">
      <div class="card-header text-center">
      <center><img src="logo/logo ONECOMPANY color.png" width="300" height="150">
<h5>Ingresa tus datos para Iniciar Sesion </h5>  
      </center>
      
    </div>
       <section id="container">
         <form action="" method="post">
          <input type="text" name="usuario" placeholder="Ingrese Numero Carnet" required> * <i class="bi bi-file-person-fill"></i>
          <br>
          <br> 
          <input type="password" name="clave" placeholder="Ingrese Contraseña" required> * <i class="bi bi-lock-fill"></i>
          <br>
           <?php 
            echo '<span style="color:red">'.$alert.'</span>';
           ?>  
           <br>
           
          <button type="submit" class="btn btn-primary">Ingresar</button>
          <br>
          <br>
           
        </form>
      </section> 
    </div>
    <div>
      
       
    </div>
  </div>
</div>

<br>



</body>
</html>

