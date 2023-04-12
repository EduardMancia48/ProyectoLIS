
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
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Cuponera XD</strong>
                </a>
            </div>
        </div>
    </header>
    <main>


        <div class="py-5 bg-light">
            <div class="container">
                <form name="frmTienda" action="php/pago.php" method="POST">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-4">
<?php
 $model=new CuponesModel();
 foreach($model->listCupones() as $cupones):
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
?>

                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="https://www.cuponstar.com/hubfs/Bonda/Images/Mock-Cat%C3%A1logo-MX-1.png" width="100%" height="325" />
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $titulo?></h5>
                                    <p class="card-text">
                                        <b> Código:</b>
                                        <?php echo $codigo; ?> <br />
                                        <b>Descripción: </b>
                                        <?php echo $desc; ?><br />

                                        <?php echo "<b>Precio regular: </b>".$precior."$ <b>Precio de oferta: </b>".$precioOf."$"; ?><br />
                                        <b>Estado:</b>
                                        <?php echo $est; ?><br />
                                        <b>Cantidad a comprar:</b><br />

                                        <input name="txtCantidad" type="number" class="form-control"
                                            max="10" min="0" step="1" value="0" style="width:20%">
                                    </p>
                                </div>
                            </div>
                        </div>

                        <?php
                    endforeach;
                    ?>

                    </div>

                    <div class="row">
                        <div class="col-12 py-4">
                            <button type="submit" class="btn btn-primary">Finalizar Comprar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Regresar al inicio</a>
            </p>
            <p class="mb-1">Cuponera &copy;</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

</body>
</html>