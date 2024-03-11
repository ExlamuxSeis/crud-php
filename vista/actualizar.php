
<?php
require '../modelo/conexion.php';
require '../modelo/modelo.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Editar registro</title>
</head>

<body>
    <main class="container">
    <h1 class="text-center">Editar registro</h1>
    <?php

    $id = $_GET['id'];
    $tabla = "registro";
    $conn = conexion::dbconexion();
    $registro = getRegistro($conn, $tabla, $id);
    foreach ($registro as $persona) :
    ?>

        <form class="row g-3" action="../controlador/actualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $persona['id']; ?>">
            <div class="col-auto">
                <label for="paterno" class="form-label">Apellido paterno</label>
                <input type="text" id="paterno" class="form-control" name="paterno" value="<?php echo $persona['paterno']; ?>">
            </div>
            <div class="col-auto">
                <label for="materno" class="form-label">Apellido materno</label>
                <input type="text" id="materno" class="form-control" name="materno" value="<?php echo $persona['materno']; ?>">
            </div>
            <div class="col-auto">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" class="form-control" name="nombre" value="<?php echo $persona['nombre']; ?>">
            </div>
            <div class="col-auto">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" id="sexo" class="form-control" name="sexo" value="<?php echo $persona['sexo']; ?>">
            </div>
            <div class="col-auto">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" id="telefono" class="form-control" name="telefono" value="<?php echo $persona['telefono']; ?>">
            </div>
            <div class="col-auto">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" value="<?php echo $persona['email']; ?>">
            </div>
            <div class="col-auto">
                <label for="municipio" class="form-label">Municipio</label>
                <input type="text" id="municipio" class="form-control" name="municipio" value="<?php echo $persona['municipio']; ?>">
            </div>
            <div class="col-auto">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" id="estado" class="form-control" name="estado" value="<?php echo $persona['estado']; ?>">
            </div>
            <button type="submit" class="btn btn-primary mt-1 m-1 col-6 col-sm-6">Actualizar</button>
            <a href="../index.php" class="btn btn-success mt-1 m-1 col-6 col-sm-6">Regresar</a>
        </form>
    <?php endforeach ?>

    </main>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>