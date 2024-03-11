<?php
require 'modelo/conexion.php';
require 'modelo/modelo.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Bienvenido a los registros</title>
</head>

<body>
    <main class="container">
        <h1 class="text-center">Registros</h1>
        <a class="btn btn-success m-1 m-sm-1" href="vista/formulario.php">Crear nuevo registro</a>
        <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-warning">
                <tr>
                    <th scope="col">Paterno</th>
                    <th scope="col">Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Actividades</th>
                </tr>
            </thead>
            <tbody>
            <?php
        $tabla = "registro";
        $conn = conexion::dbconexion();
        $registro = getAll($conn, $tabla);
        foreach ($registro as $persona) :
        ?>
                <tr>
                    <th><?php echo $persona['paterno']; ?></th>
                    <td><?php echo $persona['materno']; ?></td>
                    <td><?php echo $persona['nombre']; ?></td>
                    <td><?php echo $persona['sexo']; ?></td>
                    <td><?php echo $persona['telefono']; ?></td>
                    <td><?php echo $persona['email']; ?></td>
                    <td><?php echo $persona['municipio']; ?></td>
                    <td><?php echo $persona['estado']; ?></td>
                    <td><?php echo "<a href='vista/actualizar.php?id={$persona['id']}'><button type='button' class='btn btn-primary'>Actualizar</button></a>"?></td>
                </tr>
        <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </main>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>