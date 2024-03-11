<?php
// Extraer datos de la base de datos
function getAll($conn, $tabla)
{
    try {
        $query = $conn->prepare("select * from {$tabla}");
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $error) {
        die($error->getMessage());
    }
}

// Crear un nuevo registro
function crear($tabla, $parametros, $conn)
{
    $col = implode(', ', array_keys($parametros));

    $valores =  ":" . implode(', :', array_keys($parametros));
    $query = $conn->prepare("insert into {$tabla}({$col}) values ({$valores})");

    $query->execute($parametros);
}

// Extraer un registro específico
function getRegistro($conn, $tabla, $id)
{
    try {
        $query = $conn->prepare("select * from {$tabla} where id=$id");
        $query->execute();
        return $query->fetchAll();
    } catch (PDOException $error) {
        die($error->getMessage());
    }
}

// Actualizar un registro
function actualizar($tabla, $parametros, $conn, $id)
{

    $cols = array_keys($parametros);
    $cols = implode(', ', array_map(function ($col) {
        return "{$col} =:{$col}";
    }, $cols));
    var_dump($cols);
    $query = $conn->prepare("update {$tabla} set {$cols} where id=$id");
    $query->execute($parametros);
}
