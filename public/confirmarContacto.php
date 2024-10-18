<?php
require '../models/db/ejemploDb.php';
require '../models/queries/contactosQuery.php';
require '../models/entity/contacto.php';
require '../controllers/contactosController.php';
require '../views/contactosView.php';

use App\views\ContactosView;

$contactosView = new ContactosView();
$datosFormulario = $_POST;
$msg = $contactosView->getMsgConfirmarContacto($datosFormulario);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar accion</title>
</head>
<body>
    <header>
        <h1>Estado de la operacion</h1>
    </header>
    <section>
        <?php echo $msg; ?>
        <br>
        <a href="inicio.php">Volver a inicio</a>
    </section>
</body>
</html>