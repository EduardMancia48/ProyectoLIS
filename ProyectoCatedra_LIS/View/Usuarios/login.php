<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio de sesion</title>
    <?php
        include './View/cabecera.php';
    ?>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">   
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
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
                    <form method="POST" action="<?=PATH?>/Usuarios/validate" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" id="email" placeholder="Correo Electronico" name="email">
                        <input type="password" id="clave" placeholder="Contraseña" name="clave">
                        <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Iniciar sesión</button>
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Dui">
                        <input type="text" placeholder="Nombres">
                        <input type="text" placeholder="Apellidos">
                        <input type="text" placeholder="Teléfono">
                        <input type="text" placeholder="Correo Electronico">
                        <input type="text" placeholder="Dirección">
                        <input type="password" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
</body>
</html>