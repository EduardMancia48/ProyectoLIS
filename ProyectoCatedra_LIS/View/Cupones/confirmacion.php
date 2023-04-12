<?php defined('BASEPATH') OR exit('Acceso no autorizado')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmacion</title>
</head>
<body>
    <h1>Prueba</h1>
    <?php
     echo 'Codigo de cupon:'.$cupon['cod_cupon'];
     echo 'Titulo de la oferta:'.$cupon['titulo_oferta'];
     echo 'Precio regular: ' .$cupon['precio_regular'];
    ?>
</body>
</html>