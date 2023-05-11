<?php 
if(is_null($_SESSION['login_data'])){
    header('location:/ProyectoCatedra_LIS_Administrador/Empresas');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/ProyectoCatedra_LIS_Administrador/View/assets/css/tarjetas.css">
    <link rel="stylesheet" href="/ProyectoCatedra_LIS_Administrador/View/assets/css/footer.css">
</head>
<body>
      <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
        <div class="container-fluid">
            <img src="\ProyectoCatedra_LIS_Administrador\View\assets\images\logo_cuponera.png" alt="logo" width="100px" height="70px" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/ProyectoCatedra_LIS_Administrador/View/Empresas/index.php">Inicio</a>
              </li>
              <?php
              if($_SESSION['login_data']){
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="/ProyectoCatedra_LIS_Administrador/Usuarios/logout">Cerrar Sesion</a>';
                echo '</li> ';
                echo '<li class="nav-item">';
                echo '<b><a class="nav-link">Bienvenido '.$_SESSION['login_data']['nombres']." ". $_SESSION['login_data']['apellidos'].'</a></b>';
                echo '</li> ';
              } 
              else{
                echo '<li class="nav-item">';
                echo '<a class="nav-link" href="/ProyectoCatedra_LIS_Administrador/Usuarios/login">Iniciar Sesion</a>';
                echo '</li>';
              }
              ?> 
            </ul>
          </div>
        </div>
      </nav>
<section class="tarjetas">
    <div class="tarjetas">
		<center><h2>Seleccione una funcion</h2><center>
	</div>
    <div class="contenido-tarjetas">
    <div class="card">
	<figure>
		<img src="\ProyectoCatedra_LIS_Administrador\View\assets\images\empresa.jpg" alt="empresa">
	</figure>
	<div class="contenido-card">
		<h3>Gestion de empresas ofertantes</h3>
		<p>Registro, actualizacion y eliminacion de informacion referida a empresas ofertantes.</p>
		<a href="/ProyectoCatedra_LIS_Administrador/Empresas/menuEmpresas">Entrar</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="\ProyectoCatedra_LIS_Administrador\View\assets\images\rubros.jpg" alt="rubros">
	</figure>
	<div class="contenido-card">
		<h3>Gestion de rubros</h3>
		<p>Registro, actualizacion y eliminacion de informacion de los rubros</p>
		<a href="/ProyectoCatedra_LIS_Administrador/Rubros/menuRubros">Entrar</a>
	</div>
</div>
<div class="card">
	<figure>
		<img src="\ProyectoCatedra_LIS_Administrador\View\assets\images\clientes.jpg" alt="clientes">
	</figure>
	<div class="contenido-card">
		<h3>Gestion de clientes</h3>
		<p>Informacion referida a los clientes registrados.</p>
		<a href="/ProyectoCatedra_LIS_Administrador/Empresas/misClientes">Entrar</a>
	</div>
</div>
</section>  
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>