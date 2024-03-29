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
    <link rel="stylesheet" href="/ProyectoCatedra_LIS/View/assets/css/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
<script src="/ProyectoCatedra_LIS/View/assets/js/script.js"></script>
</head>
<body>
<div class="row" style="background-color: #C6CAC8;">
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
                        <input type="text" name="cod_Dui" class="form-control form-control-lg" value="<?= isset($usuario)?$usuario['cod_Dui']:'' ?>" placeholder="Ingrese su Dui">
                    </div>
                    <div class="form-group">
                        <label>Nombre<sub>*</sub></label>
                        <input type="text" name="nombre" class="form-control form-control-lg" value="<?= isset($usuario)?$usuario['nombre']:'' ?>" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label>Apellido<sub>*</sub></label>
                        <input type="text" name="apellido" class="form-control form-control-lg" value="<?= isset($usuario)?$usuario['apellido']:'' ?>" placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group">
                        <label>Teléfono<sub>*</sub></label>
                        <input type="text" name="telefono" class="form-control form-control-lg" value="<?= isset($usuario)?$usuario['telefono']:'' ?>" placeholder="Ingrese su numero de teléfono">
                    </div>
                    <div class="form-group">
                        <label>Correo<sub>*</sub></label>
                        <input type="email" name="correo" class="form-control form-control-lg" value="<?= isset($usuario)?$usuario['correo']:'' ?>" placeholder="Ingrese su correo">
                    </div>
                    <div class="form-group">
                        <label>Dirección<sub>*</sub></label>
                        <input type="text" name="direccion" class="form-control form-control-lg" value="<?= isset($usuario)?$usuario['direccion']:'' ?>" placeholder="Ingrese su direccion de correo electrónico">
                    </div>
                    <div class="form-group">
                        <label>Contraseña<sub>*</sub></label>
                        <input type="password" name="contrasena" class="form-control form-control-lg" placeholder="Ingrese una contraseña">
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