<!DOCTYPE html>
<html>
<head>
	<title>Credit Card Payment Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Cuponera Treasure</strong>
                </a>
            </div>
        </div>
    </header>
<body>
	<div class="container mt-5">
		<h1>Cupones Treasure </h1>
		<form action="process-payment.php" method="post">
		<div class="col-lg-7 border shadow pb-3 pt-3">
			
		<div class="form-group row">
			<div class="col-lg-10">
				<label for="card_number"><b>Nombre del Titular:</b></label>
				<input type="text" class="form-control" name="user_name" id="user_name" pattern="[a-zA-Z]+" placeholder="Ingrese su nombre"required>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-9">
				<label for="card_number"><b>Número de Tarjeta:</b></label>
				<input type="text" class="form-control" name="card_number" id="card_number" placeholder="Código de tarjeta" pattern="^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$" required>
			</div>
		</div>
			
		
		<div class="form-group row">
			<div class="col-lg-5">
				<label for="expiry_date"><b>Fecha de expiración (MM/YY):</b></label>
				<input type="text" class="form-control" name="expiry_date" id="expiry_date" placeholder="Fecha de expiración" pattern="^(0[1-9]|1[0-2])\/([0-9]{2})$" required>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-4">
				<label for="cvv"><b>CVV:</b></label>
				<input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV"pattern="^\d{3,4}$" required>
			</div>
		</div>

			<button type="submit" class="btn btn-success">Submit</button>
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

