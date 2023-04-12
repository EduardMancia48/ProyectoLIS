<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de sesion</title>
    <script src="/ProyectoCatedra_LIS/View/assets/js/bootstrap.min.js"></script>
    <script src="/ProyectoCatedra_LIS/View/assets/js/alertify.js" type="text/javascript"></script>
    <link href="/ProyectoCatedra_LIS/View/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ProyectoCatedra_LIS/View/assets/css/alertify.core.css" rel="stylesheet" type="text/css"/>
    <link href="/ProyectoCatedra_LIS/View/assets/css/alertify.default.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
  <link rel="stylesheet" href="/ProyectoCatedra_LIS/View/assets/css/estilos.css">

    <script src="/ProyectoCatedra_LIS/View/assets/js/script.js"></script>
</head>
<body>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card bg-light mt-5">
            <div class="card-header card-text">
                <h2 class="card-text">Registrar Usuario</h2>
            <p class="card-text">Complete el formulario para registrarse</p>
            <?php
                        if(isset($errores)){
                            if(count($errores)>0){
                                echo "<div class='alert alert-danger'><ul>";
                                foreach ($errores as $error) {
                                    echo "<li>$error</li>";
                                }
                                echo "</ul></div>";

                            }
                        }
                   ?>
            </div>
            <div class="card-body">
                <form method="post" action="/ProyectoCatedra_LIS/Usuarios/addUser">
                    <div class="form-group">
                        <label>DUI<sub>*</sub></label>
                        <input type="text" name="cod_Dui" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Nombre<sub>*</sub></label>
                        <input type="text" name="nombre" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Apellido<sub>*</sub></label>
                        <input type="text" name="apellido" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Teléfono<sub>*</sub></label>
                        <input type="text" name="telefono" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Correo<sub>*</sub></label>
                        <input type="email" name="correo" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Dirección<sub>*</sub></label>
                        <input type="text" name="direccion" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label>Contraseña<sub>*</sub></label>
                        <input type="password" name="contrasena" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <button class="btn btn-lg btn-registrar btn-primary btn-block" name="registrar"  type="submit">Registrar</button>
                         
                        </div>
                            </div>
                            <div class="col">
                                <a href="/ProyectoCatedra_LIS/Usuarios/login" class="btn btn-light btn-block pull-right">Ya tienes una cuenta? Login </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>