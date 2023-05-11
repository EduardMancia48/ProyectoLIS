<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar empleado</title>
    <!-- Agregamos los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Editar empleado</h1>
        
        <form method="POST" action="/ProyectoCatedra_LIS/Empleados/editEmpleado">
            <input type="hidden" name="id_empleado" value="<?php echo $empleado['id_empleado']; ?>">

            <div class="form-group">
                <label for="cod_empleado">Código empleado</label>
                <input type="text" class="form-control" id="cod_empleado" name="cod_empleado" value="<?php echo $empleado['cod_empleado']; ?>">
            </div>

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $empleado['nombres']; ?>">
            </div>

            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $empleado['apellidos']; ?>">
            </div>

            <div class="form-group">
                <label for="correo">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $empleado['correo']; ?>">
            </div>

            <div class="form-group">
                <label for="contraseña">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" value="<?php echo $empleado['contraseña']; ?>">
            </div>

            <button type="submit" value="actualizar" name="actualizar" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
