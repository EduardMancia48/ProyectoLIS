<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>
<?php echo "<script>alert('Cupon comprado correctamente');</script>";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
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
                <a class="nav-link" aria-current="page" href="/ProyectoCatedra_LIS/Cupones/miscupones">Mis Compras</a>
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
        <h3 class="text-center mb-4">Compra Finalizada</h3>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <pre>
                        <img src="https://www.cuponstar.com/hubfs/Bonda/Images/Mock-Cat%C3%A1logo-MX-1.png" height="275" />
                         
                            <?php
                            echo '<strong>Codigo de cupon: </strong><span class="text-success">'  . $cupon['cod_cupon'] . '</span><br>';
                            echo '<strong>Titulo de la oferta: </strong><span ">' . $cupon['titulo_oferta'] . '</span><br>';
                            echo '<strong>Precio regular $: </strong><span">' . $cupon['precio_regular'] . '</span><br>';
                            echo '<strong>Precio oferta $: </strong><span">' . $cupon['precio_oferta'] . '</span><br>';
                            echo '<strong>Su cupon sobre: </strong><span">' . $cupon['descripcion'] . '</span><br>';
                            echo '<strong>Finaliza: </strong><span">' . $cupon['fecha_fin'] . '</span><br>';
                            ?>
                        
                        </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-7 text-center">
                <a href="<?='/ProyectoCatedra_LIS/Cupones/generar_PDF/'.$cupon['cod_cupon']?>" class="btn btn-primary">Descarga PDF</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
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
