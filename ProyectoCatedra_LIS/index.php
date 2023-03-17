<?php
require_once 'class/CuponesModel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Lista de cupones</h1>
    <?php
     $model=new CuponesModel();
     foreach($model->listCupones() as $cupones){
        $codigo=$cupones['cod_cupon'];
        $titulo=$cupones['titulo_oferta'];
        $precior=$cupones['precio_regular'];
        $precioOf=$cupones['precio_oferta'];
        $fechai=$cupones['fecha_inicio'];
        $fechaf=$cupones['fecha_fin'];
        $fechal=$cupones['fecha_limite'];
        $desc=$cupones['descripcion'];
        $est=$cupones['estado'];
        $cantd=$cupones['cant_cupones_disponibles'];
        echo "<h2>".$codigo."</h2>";
        echo "<div>";
        echo "<p>";
        echo "<b>"."Titulo: "."</b>".$titulo."<br>";
        echo "<b>"."Precio regular: "."</b>".$precior."<br>";
        echo "<b>"."Precio oferta: "."</b>".$precioOf."<br>";
        echo "<b>"."Fecha inicio: "."</b>".$fechai."<br>";
        echo "<b>"."Fecha fin: "."</b>".$fechaf."<br>";
        echo "<b>"."Fecha limite: "."</b>".$fechal."<br>";
        echo "<b>"."Descripción: "."</b>".$desc."<br>";
        echo "<b>"."Estado de cupón: "."</b>".$est."<br>";
        echo "<b>"."Cupones disponibles: "."</b>".$cantd."<br>";
        echo "</p>";
        echo "</div>";
     }
    ?>
</body>
</html>