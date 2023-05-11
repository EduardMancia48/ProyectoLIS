
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de sesión</title>
    <link href="/ProyectoCatedra_LIS_Administrador/View/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ProyectoCatedra_LIS_Administrador/View/assets/css/alertify.core.css" rel="stylesheet" type="text/css"/>
    <link href="/ProyectoCatedra_LIS_Administrador/View/assets/css/alertify.default.css" rel="stylesheet" type="text/css"/>
    <script src="/ProyectoCatedra_LIS_Administrador/View/assets/js/bootstrap.min.js"></script>
    <script src="/ProyectoCatedra_LIS_Administrador/View/assets/js/alertify.js" type="text/javascript"></script>
    <script src="/ProyectoCatedra_LIS_Administrador/View/assets/js/script.js"></script>   
    <link rel="stylesheet" href="/ProyectoCatedra_LIS_Administrador/View/assets/css/estilos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
    <link rel="stylesheet" href="./View/assets/css/footer.css">
</head>
<body  class="login-body">
   <div class="card bg-light">
        <div class="card-header" style="display: flex;">
        <img src="/ProyectoCatedra_LIS_Administrador/View/assets/images/icon-login.png" alt="xd" width="100px">
            <h2 class="text-center" style="margin-top: 10px";>Iniciar sesión </h2>
         
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
        <p class="text-center">Ingrese su correo y contraseña</p>
        
            <div class="card-body"  id="card1">
                <form method="post" action="/ProyectoCatedra_LIS_Administrador/Usuarios/validate">
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
                            <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Iniciar sesión</button>
                            </div>
                        </div>
                        <div class="col">
                                <a href="/ProyectoCatedra_LIS_Administrador/View/Usuarios/register.php" class="btn btn-light btn-block pull-right">No tienes una cuenta? Registrate </a>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>  
</body>
</html>