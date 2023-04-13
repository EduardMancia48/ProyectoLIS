<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>

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
</head>
<body>
<header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="/ProyectoCatedra_LIS/Cupones" class="navbar-brand d-flex align-items-center">
                    <h2><strong class="text-white">Cuponera Treasure</strong></h2>
                </a>
                <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-success" name="C_sesion" href="/ProyectoCatedra_LIS/Usuarios/logout/">Cerrar sesión</a>                
                </form>                          
            </div>
        </div>
    </header>
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
