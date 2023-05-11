<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
      <br>
<div class="container">
            <div class="row">
                <h3>Editar empresa</h3>
            </div>
            <div class="row">
                <div class=" col-md-7">
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
                   <form role="form" action="/ProyectoCatedra_LIS_Administrador/Empresas/update/<?=$empresa['cod_empresa']?>" method="POST">
                    <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Campos requeridos</strong></div>
                        <div class="form-group col-md-6">
                            <label for="codigo">Codigo de empresa:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="cod_empresa" id="codigo_empresa" readonly="true" value="<?= isset($empresa)?$empresa['cod_empresa']:'' ?>">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre_empresa">Nombre de la empresa:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombre_empresa" id="nombre_empresa" value="<?= isset($empresa)?$empresa['nombre_empresa']:'' ?>" placeholder="Ingresa el nombre de la empresa">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Dirección de la empresa:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="direccion" id="direccion" value="<?= isset($empresa)?$empresa['direccion']:'' ?>" placeholder="Ingresa la dirección de la empresa">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre de contacto:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="nombre_contacto" id="nombre_contacto" value="<?= isset($empresa)?$empresa['nombre_contacto']:'' ?>" placeholder="Ingresa el nombre de contacto">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Teléfono de la empresa:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="telefono" id="telefono" value="<?= isset($empresa)?$empresa['telefono']:'' ?>" placeholder="Ingresa el teléfono de la empresa">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Correo de la empresa:</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="correo" id="correo" value="<?= isset($empresa)?$empresa['correo']:'' ?>" placeholder="Ingresa el correo de la empresa">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Porcentaje de comision (%):</label>
                            <div class="input-group">
                                <input type="number" step="any" class="form-control" name="porc_comision" id="porcentaje" value="<?= isset($empresa)?$empresa['porc_comision']:'' ?>" placeholder="Ingresa el valor del porcentaje de comisión de la empresa" min="0">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rubro">Rubro:</label>
                            <div class="input-group">
                                <select id="cod_rubro" name="cod_rubro" class="form-control">
                                <?php
                                    foreach($rubros as $rubro){
                                ?>
                                    <option value="<?=$rubro['cod_rubro']?>"><?=$rubro['nombre']?></option>
                                    <?php } ?>                                     
                                </select>
                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-info" value="Guardar" name="guardar">
                        <a class="btn btn-danger" href="/ProyectoCatedra_LIS_Administrador/Empresas/menuEmpresas">Cancelar</a>
                    </form>
                    </div>
              </div>  
        </div>
        <br>
  <footer class="pie-pagina">
  <div class="grupo-1">
      <div class="box">
          <figure class="">
                  <img src="\ProyectoCatedra_LIS_Administrador\View\assets\images\logo_cuponera2.jpg" alt="La cuponera" width="70px" height="160px" class="d-inline-block align-top">
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