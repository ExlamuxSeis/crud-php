<?php
require '../modelo/conexion.php';
require '../modelo/modelo.php';
//var_dump($_POST);
$tabla = "registro";
$id = $_POST['id'];
$parametros = [
    'paterno' => $_POST['paterno'],
    'materno' => $_POST['materno'],
    'nombre' => $_POST['nombre'],
    'sexo' => $_POST['sexo'],
    'telefono' => $_POST['telefono'],
    'email' => $_POST['email'],
    'municipio' => $_POST['municipio'],
    'estado' => $_POST['estado']
];
$conn = conexion::dbconexion();
actualizar($tabla, $parametros, $conn, $id);
header('Location: ../index.php');
