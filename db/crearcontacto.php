<?php

$hostDB = 'localhost';
$userDB = 'root';
$pwdDB = '';
$nameDB = 'ejemplo_db';

$conexDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);
if ($conexDB->connect_error) {
    echo $conexDB->connect_error;
    die();
} else {
    echo 'Conexion exitosa!!!<br>';
}

$sql = "insert into contactos (nombre,email,telefono)values";
$sql .= "('Juanita','juanita@juanita.com','9876333')";

$resultDB = $conexDB->query($sql);

if ($resultDB) {
    echo 'Datos guardados';
} else {
    echo 'No se pudo guardar la informacion';
}

$conexDB->close();
