<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de empleados</title>
    <!-- Agregamos los enlaces a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Listado de empleados</h1>
        <?php if(isset($_SESSION['success_message'])): ?>
            <div class="alert alert-success"><?php echo $_SESSION['success_message']; ?></div>
            <?php unset($_SESSION['success_message']); ?>
        <?php endif; ?>
        <a href="/ProyectoCatedra_LIS/View/Empleados/crear_empleado" class="btn btn-primary mb-3">Agregar</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo electrónico</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($empleados as $empleado): ?>
                    <tr>
                        <td><?php echo $empleado['cod_empleado']; ?></td>
                        <td><?php echo $empleado['nombres']; ?></td>
                        <td><?php echo $empleado['apellidos']; ?></td>
                        <td><?php echo $empleado['correo']; ?></td>
                        <td><?php echo $empleado['cod_rol']; ?></td>
                        <td>
                            <!-- Botones Editar y Eliminar con Bootstrap -->
                            <a href="/ProyectoCatedra_LIS/Empleados/editar_empleado/<?php echo $empleado['cod_empleado']; ?>" class="btn btn-secondary">Editar</a>
                            <a href="/ProyectoCatedra_LIS/Empleados/eliminar/<?php echo $empleado['cod_empleado']; ?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- Agregamos los enlaces a los archivos JavaScript de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
