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
    <script src="/ProyectoCatedra_LIS/View/assets/js/script.js"></script>
</head>
<body>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card bg-light mt-5">
            <div class="card-header card-text">
                <h2 class="card-text">Iniciar sesion</h2>
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
            <p class="card-text">Ingrese su correo y contraseña</p>
            </div>
        
            <div class="card-body">
                <form method="post" action="/ProyectoCatedra_LIS/Usuarios/validate">
                    <div class="form-group">
                        <label for="email">Correo<sub>*</sub></label>
                        <input type="email" name="email" class="form-control form-control-lg">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Contraseña<sub>*</sub></label>
                        <input type="password" name="contrasena" class="form-control form-control-lg ">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                            <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Iniciar sesión</button>                            </div>
                        </div>
                        <div class="col">
                                <a href="/ProyectoCatedra_LIS/View/Usuarios/register.php" class="btn btn-light btn-block pull-right">No tienes una cuenta? Registrate </a>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
</body>
</html>