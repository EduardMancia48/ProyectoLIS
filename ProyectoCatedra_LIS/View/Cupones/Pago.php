<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmar compra</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
	<div class="container mt-5">
		<center><h1><strong>Datos de compra</strong></h1></center>
		<center><form action="/ProyectoCatedra_LIS/Cupones/confirmar_Compra" method="POST">
    <input type="hidden" name="cod_cupon" value="<?=$cupon['cod_cupon']?>">
    <input type="hidden" name="cant_disponible" value="<?=$cupon['cant_cupones_disponibles']?>">
    <input type="hidden" name="Cod_Dui" value="<?=$_SESSION['login_data']['Cod_Dui']?>">
    <?php $cantd=$cupon['cant_cupones_disponibles']; ?>
		<div class="col-lg-7 border shadow pb-3 pt-3 bg-dark">
		<div class="form-group row">
			<div class="col-lg-10">
				<label for="card_number" class="text-white"><b>Nombre del Titular:</b></label>
				<input type="text" class="form-control" name="user_name" id="user_name" placeholder="Ingrese su nombre" required>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-9">
				<label for="card_number" class="text-white"><b>Número de Tarjeta:</b></label>
				<input type="text" class="form-control" name="card_number" id="card_number" placeholder="Código de tarjeta" required>
			</div>
		</div>
			
		
		<div class="form-group row">
			<div class="col-lg-5">
				<label for="expiry_date" class="text-white"><b>Fecha de expiración (MM/YY):</b></label>
				<input type="text" class="form-control" name="expiry_date" id="expiry_date" placeholder="Fecha de expiración" required>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-4">
				<label for="cvv" class="text-white"><b>CVV:</b></label>
				<input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV" required>
			</div>
		</div>
    <div class="form-group row">
			<div class="col-lg-4">
				<label for="cantidad" class="text-white"><b>Cantidad de cupones a comprar:</b></label>
				<?php echo "<input name=\"cantidad\" type=\"number\" class=\"form-control\" max=\"$cantd\" min=\"1\" step=\"1\" value=\"1\" style=\"width:30%\">" ?>
			</div>
		</div>
		    <button class="btn btn-lg btn-registrar btn-primary btn-block" name="confirmar" type="submit">Confirmar</button>
		</div>
		</form></center>
	</div>
 <br>
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

