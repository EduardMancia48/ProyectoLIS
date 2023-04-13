<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirmar compra</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../View/assets/css/estilos.css">
</head>
<header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/ProyectoCatedra_LIS/Cupones" class="navbar-brand d-flex align-items-center">
                    <strong>Cuponera Treasure</strong>
                </a>
				<form class="form-inline my-2 my-lg-0">
                    <a class="btn btn-success" name="C_sesion" href="/ProyectoCatedra_LIS/Usuarios/logout/">Cerrar sesión</a>                
                </form>
            </div>
        </div>
    </header>
<body background="https://cdn.pixabay.com/photo/2012/04/18/16/09/beehive-37436_640.png">
	<div class="container mt-5">
		<h1><strong>Cupones Treasure</strong> </h1>
		<form action="/ProyectoCatedra_LIS/View/Cupones/Pago.php" method="post">
		<div class="col-lg-7 border shadow pb-3 pt-3 bg-dark">
			
		<div class="form-group row">
			<div class="col-lg-10">
				<label for="card_number" class="text-white"><b>Nombre del Titular:</b></label>
				<input type="text" class="form-control" name="user_name" id="user_name" pattern="[a-zA-Z]+" placeholder="Ingrese su nombre"required>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-9">
				<label for="card_number" class="text-white"><b>Número de Tarjeta:</b></label>
				<input type="text" class="form-control" name="card_number" id="card_number" placeholder="Código de tarjeta" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$" required>
			</div>
		</div>
			
		
		<div class="form-group row">
			<div class="col-lg-5">
				<label for="expiry_date" class="text-white"><b>Fecha de expiración (MM/YY):</b></label>
				<input type="text" class="form-control" name="expiry_date" id="expiry_date" placeholder="Fecha de expiración" pattern="^(0[1-9]|1[0-2])\/([0-9]{2})$" required>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-4">
				<label for="cvv" class="text-white"><b>CVV:</b></label>
				<input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV"pattern="^\d{3,4}$" required>
			</div>
		</div>
		     <a class="btn btn-success" name="Confirmar" href="<?='/ProyectoCatedra_LIS/Cupones/confirmar_Compra/'.$cupon['cod_cupon']?>">Confirmar</a>
		</div>
		</form>
	</div>
	<footer class="text-muted py-5">
        <div class="container bg-dark">
        <div class="text-center p-3">
             © 2023 Copyright:
             <p class="mb-1 text-white">Cuponera &copy;</p>
             
        </div>
        </div>
    </footer>
</body>
</html>

