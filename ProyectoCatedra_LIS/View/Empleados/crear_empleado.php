
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar empleado</title>
    <!-- Agregamos los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Agregar empleado</h1>
        
<form method="POST" action="/ProyectoCatedra_LIS/Empleados/guardar">
  <div class="form-group">
    <label for="cod_empleado">Código empleado</label>
    <input type="text" class="form-control" id="cod_empleado" name="cod_empleado" value="<?php echo isset($empleado['cod_empleado']) ? $empleado['cod_empleado'] : ''; ?>">

  </div>
  <div class="form-group">
    <label for="nombres">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo isset($empleado['nombres']) ? $empleado['nombres'] : ''; ?>">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo isset($empleado['apellidos']) ? $empleado['apellidos'] : ''; ?>">
  </div>
  <div class="form-group">
    <label for="correo">Correo electrónico</label>
    <input type="email" class="form-control" id="correo" name="correo" value="<?php echo isset($empleado['correo']) ? $empleado['correo'] : ''; ?>">
  </div>
  <div class="form-group">
    <label for="contraseña">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña" value="<?php echo isset($empleado['contraseña']) ? $empleado['contraseña'] : ''; ?>">
  </div>

  <button type="submit" value="guardar" name="guardar" class="btn btn-primary">Guardar</button>

</form>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
