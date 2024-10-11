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

$sql = "update contactos set ";
$sql .= "nombre='pablito', ";
$sql .= "email='pablito@pablito.com', ";
$sql .= "telefono='654789' ";
$sql .= " where id=1"; 

$resultDB = $conexDB->query($sql);

if ($resultDB) {
    echo 'Datos guardados';
} else {
    echo 'No se pudo guardar la informacion';
}

$conexDB->close();
