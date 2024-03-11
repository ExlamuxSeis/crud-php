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
    <title>Agregar registro</title>
</head>

<body>
    <main class="container">
        <h1 class="text-center">Agregar nuevo registro</h1>
        <form class="row g-3" action="../controlador/agregar.php" method="post">
            <input type="hidden" name="id">
            <div class="col-auto">
                <label for="paterno" class="form-label">Apellido paterno</label>
                <input type="text" id="paterno" class="form-control" name="paterno" required>
            </div>
            <div class="col-auto">
                <label for="materno" class="form-label">Apellido materno</label>
                <input type="text" id="materno" class="form-control" name="materno" required>
            </div>
            <div class="col-auto">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" class="form-control" name="nombre" required>
            </div>
            <div class="col-auto">
            <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" id="sexo" name="sexo" aria-label="Default select example">
                    <option selected>Seleccionar Sexo</option>
                    <option value="H">Hombre</option>
                    <option value="M">Mujer</option>
                </select>
            </div>
            <div class="col-auto">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" id="telefono" class="form-control" name="telefono" required>
            </div>
            <div class="col-auto">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" required>
            </div>
            <div class="col-auto">
                <label for="municipio" class="form-label">Municipio</label>
                <input type="text" id="municipio" class="form-control" name="municipio" required>
            </div>
            <div class="col-auto">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" id="estado" class="form-control" name="estado" required>
            </div>
            <button type="submit" class="btn btn-primary m-1 col-6 col-sm-6 col-md-6">Agregar registro</button>
            <a class="btn btn-success m-1 col-6 col-sm-6 col-md-6" href="../index.php">Regresar</a>
        </form>

    </main>
</body>

</html>