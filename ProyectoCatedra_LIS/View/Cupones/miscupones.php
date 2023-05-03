<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./View/assets/css/estilos.css">
    <link rel="stylesheet" href="/ProyectoCatedra_LIS/View/assets/css/footer.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <div class="container-fluid">
            <img src="\ProyectoCatedra_LIS\View\assets\images\logo_cuponera.png" alt="logo" width="100px" height="70px" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/ProyectoCatedra_LIS/View/Cupones/index.php">Inicio</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Mis Compras</a>
              </li>
              <?php
              if($_SESSION['login_data']){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="/ProyectoCatedra_LIS/Usuarios/logout">Cerrar Sesion</a>';
                echo '</li> ';
                echo '<li class="nav-item">';
                echo '<b><a class="nav-link">Bienvenido '.$_SESSION['login_data']['nombres']." ". $_SESSION['login_data']['apellidos'].'</a></b>';
                echo '</li> ';
              } 
              else{
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="/ProyectoCatedra_LIS/Usuarios/login">Iniciar Sesion</a>';
                echo '</li>';
              }
              ?> 
            </ul>
          </div>
        </div>
</nav>
<div class="container">
<form name="frmTienda" action="/ProyectoCatedra_LIS/View/Cupones/miscupones.php" method="POST">
    <div class="row">
        <center><h3>Mis compras</h3></center>
    </div>
    <div class="row">
    <table class="table table-striped table-bordered table-hover" id="tabla">
                    <thead>
                        <tr>
                            <th>Codigo del Cupón</th>
                            <th>Titulo de la oferta</th>
                            <th>Descripcion</th>
                            <th>Fecha limite</th>
                            <th>Estado del cupon</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($cupones as $cupon){
                    $codigo=$cupon['cod_cupon'];
                    $titulo=$cupon['titulo_oferta'];
                    $desc=$cupon['descripcion'];
                    $fechal=$cupon['fecha_limite'];
                    $est=$cupon['estado'];
                    ?>
                    <tr>
                        <td><?=$codigo?></td>
                        <td><?=$titulo?></td>
                        <td><?=$desc?></td>
                        <td><?=$fechal?></td>
                        <td><?=$est?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
    </table>
    </div>
</div>
<footer class="pie-pagina">
  <div class="grupo-1">
      <div class="box">
          <figure class="">
                  <img src="\ProyectoCatedra_LIS\View\assets\images\logo_cuponera2.jpg" alt="La cuponera" width="70px" height="160px" class="d-inline-block align-top">
          </figure>
      </div>
      <div class="box">
          <h2>SOBRE NOSOTROS</h2>
          <p>Somos una agencia que te ayuda a encontrar los cupones que buscas de una manera confiable y segura.</p>
      </div>
  </div>
  <div class="grupo-2">
      <small>&copy; 2023 <b>LIS</b> - Todos los Derechos Reservados.</small>
  </div>
</footer>
</body>

</html>
