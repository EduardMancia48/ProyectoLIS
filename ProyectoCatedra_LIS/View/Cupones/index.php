<?php 
if(is_null($_SESSION['login_data'])){
    header('location:/ProyectoCatedra_LIS/Cupones');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupones</title>
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/login-form-14/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./View/assets/css/carrousel.css">
    <link rel="stylesheet" href="./View/assets/css/footer.css">
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
    <header>
       <div class="inicio">
        <div class="capita"></div>
        <div class="informacion">
        <h1>La Cuponera</h1>
        <p>Consigue las mejores promociones para la compra de tus cupones aquí.</p>
        </div>
    </header>
    <main>     
    <div class="py-5 bg-light border rounded shadow">
            <div class="container">
                </div>
                <center>
                <div class="container">
                <div class="row">
                <h3><b>Descubre nuestros tesoros disponibles </b></h3>  
                <center>
                    <div class="input-group mb-3 w-50" >
                    <input type="text" class="form-control" placeholder="Buscar cupones" aria-label="" aria-describedby="basic-addon1" name="inp_Buscar" id="searchInput">
                    </div>
                </center>
                </div>
            </div>
                </center>
                <div class="container">
                    <form name="frmTienda" action="/ProyectoCatedra_LIS/View/Cupones" method="POST">
                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 g-5" id="cupones_container">
                            <?php
                                foreach($cupones as $cupon):
                                    $codigo=$cupon['cod_cupon'];
                                    $titulo=$cupon['titulo_oferta'];
                                    $precior=$cupon['precio_regular'];
                                    $precioOf=$cupon['precio_oferta'];
                                    $fechai=$cupon['fecha_inicio'];
                                    $fechaf=$cupon['fecha_fin'];
                                    $fechal=$cupon['fecha_limite'];
                                    $desc=$cupon['descripcion'];
                                    $est=$cupon['estado'];
                                    $cantd=$cupon['cant_cupones_disponibles'];
                                    $imagen=$cupon['imagen'];
        
                            ?>
                            <div class="col cupon-card">
                                <div class="card shadow-sm">
                                    <img src="data:image/png;base64,<?php echo base64_encode($imagen)?>" width="100%" height="325"/>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $titulo?></h5>
                                        <p class="card-text" data-fecha-inicio="<?php echo $fechai; ?>" data-fecha-fin="<?php echo $fechaf;?>">
                                        <a class="btn btn-sm-2 btn-link" data-bs-toggle="collapse" data-bs-target="#<?php echo $codigo ?>"><b>Mas detalles ⬇️</b></a>
                                            <div class="mt-2 collapse card shadow pl-2 pb-2" id="<?php echo $codigo ?>">
                                            <b> Código:</b>
                                            <?php echo $codigo; ?> <br />
                                            <b>Descripción: </b>
                                            <?php echo $desc; ?><br />
                                            <?php echo "<b>Precio regular: </b>"."$ ".$precior."<b>Precio de oferta: </b>"."$ ".$precioOf; ?><br />
                                            <?php echo "<b>Fecha de Inicio: </b>".$fechai; ?><br />
                                            <?php echo "<b>Fecha limite: </b>".$fechal?><br />
                                            </div>
                                            <?php echo "<b>Cantidad disponible: </b>".$cantd?><br />
                                            <b>Estado:</b>
                                            <?php echo $est; ?><br />                                      
                                            <div class="row row-cols-1 row-cols-sm-2">
                                                <div class="col-12 py-4">
                                                    <a class="btn btn-success" name="Comprar_Cupon" href="<?='/ProyectoCatedra_LIS/Cupones/comprar/'.$codigo?>">Comprar</a>
                                                </div>
                                            </div>
                                       
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                        ?>
                        </div>
                        <br>
                        <p class="float-end mb-1 pr-5">
                           <a class="btn btn-warning" href="#">Regresar al inicio</a>
                        </p>
                    </form>
                    <div class="row">
                        <div class="col">
                            <h2 id="jsMensaje"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
  </main>   
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
    <script src="View\assets\js\buscar.js"></script>
    <script src="View\assets\js\comp_Fechas.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
</body>
</html>