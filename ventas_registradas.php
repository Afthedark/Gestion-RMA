<?php 
session_start();
$idUser=$_SESSION['idUser'];
if($_SESSION['rol']!=1 && $_SESSION['rol']!=3 ){
  header('location: inicio.php');
}
include "include/head.php";
include "include/menu_superior.php";
include "include/menu_principal.php";
?>
  <div class="content-wrapper">
    <section class="content" >
      <center style="background: white;"><h1>VENTAS REGISTRADAS</h1></center>
      <table class="table table-bordered">
        <thead>
          <tr>
          <th scope="col">#</th>
            <th scope="col">Fecha de venta</th>
            <th scope="col">Tiempo de Garantia</th>
            <th scope="col">Numero de serie</th>
            <th scope="col">Codigo del Producto</th>
            <th scope="col">Estado</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql_registe=mysqli_query($conection," SELECT COUNT(*) AS total_registro from venta where estado in(1,2) and id_usuario=$idUser");
          $result_register=mysqli_fetch_array($sql_registe);
          $total_registro=$result_register['total_registro'];
          $por_pagina = 10;
          if(empty($_GET['pagina'])){
            $pagina = 1;
          }else{
            $pagina=$_GET['pagina'];
          } 
          $desde = ($pagina-1) * $por_pagina;
          $total_paginas=ceil($total_registro / $por_pagina);
          $query= mysqli_query($conection,"SELECT id_venta,num_serie,fecha_venta,fecha_garantia,codigo_producto,estado,id_usuario FROM venta where estado in (1 ,2) and id_usuario=$idUser order by id_venta asc
          limit $desde,$por_pagina");
          mysqli_close($conection);
          $result = mysqli_num_rows($query);
          if($result>0){
            $contar=0;
            while($data=mysqli_fetch_array($query)){
              $contar++;
              if($_SESSION['idUser']==$data['id_usuario']){?>
                <tr >
                  <td><?php echo $contar;?></td>
                  <td><?php echo $data['fecha_venta'];?></td>
                  <td><?php echo $data['fecha_garantia'];?></td>
                  <td><?php echo $data['num_serie'];?></td>
                  <td><?php echo $data['codigo_producto'];?></td>
                  <td><?php
                      if($data['estado']==1){
                        echo "Sin facturar";
                      } 
                      else{
                        echo "Facturado";
                      }
                      ?>
                  </td>
                  <td> 
                    <?php
                    if($data["estado"]!=2){?> 
                      <button >
                        <a class=";link_delete" href="modificar_ventas.php? id=<?php echo $data['id_venta'];?>">
                        <i class="bi bi-pencil-square" style="color: green; "></i>
                        </a>
                      </button>
                    <?php
                    }
                    ?>
                    <?php 
                    if($data["estado"]!=2){?>  
                      <button onclick="return confirmardelete()">
                        <a class="link_delete" href="eliminar_venta.php? id=<?php echo $data['id_venta'];?>"> <i class="bi bi-trash-fill" style="color: red;"></i></a>
                      </button> 
                    <?php
                    }
                    if($data["estado"]!=2){?> 
                      <button onclick="return confirmarfact()">
                        <a class="link_delete" href="facturar_venta.php?id=<?php echo $data['id_venta'];?>">
                        <i class="bi bi-card-list" style="color: #e5be01;"></i>
                        </a>
                      </button>
                    <?php
                    }?>
                  </td>
                </tr>
              <?php
              }
            }
          }
          ?>
        </tbody>
      </table>
      <section >
        <div class="paginador" >
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center"  >
              <?php 
              if($pagina !=1){?>
                <li class="page-item" style="border: solid black;"><a class="page-link"  style="color: black;" href="?pagina=<?php echo 1; ?>"><i></i>Anterior</a></li>
                <li class="page-item" ><a href="?pagina=<?php echo $pagina-1;?>"><i></i></a></li>
                <?php 
              }
              for ($i=1; $i <= $total_paginas; $i++) { 
                # code...
                if($i==$pagina){
                  echo '<li class="page-item"  style="border: solid black;"><a class="page-link"  style="color: black;">'.$i."&nbsp;&nbsp;".'</a></li>';
                }else{
                  echo '<li class="page-item" style="border: solid black;"><a class="page-link"  style="color: black; " href="?pagina='.$i.'">'.$i."&nbsp;&nbsp;".'</a></li>';
                }
              }
              if($pagina != $total_paginas){?>
                <li style="border: solid black">
                  <a class="page-link"  href="?pagina=  <?php echo $pagina + 1;?>"  style="color: black;">&nbsp;&nbsp;Siguiente  
                  </a>
                </li>
                <li><a class="page-link"  href="?pagina=<?php echo  $total_paginas; ?>"> </a></li>
              <?php
              } ?>
            </ul>
          </nav>
        </div>
      </section>
    </section>
  </div>
  <?php
  include "include/footer.php"
  ?>