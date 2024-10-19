<?php
require '../models/db/ejemploDb.php';
require '../models/queries/contactosQuery.php';
require '../models/entity/contacto.php';
require '../controllers/contactosController.php';
require '../views/contactosView.php';
require '../views/modalesView.php';

use App\views\ContactosView;
use App\views\ModalesView;

$contactosViews = new ContactosView();
$modelesView = new ModalesView();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contactos</title>
    <link rel="stylesheet" href="css/modales.css">
    <link rel="stylesheet" href="css/contactos.css">
</head>

<body>
    <header>
        <h1>Lista de contactos</h1>
    </header>
    <section>
        <a href="formularioContacto.php">Registrar contactor</a>
        <br>
        <?php echo $contactosViews->tablaContactos(); ?>
        <br>
    </section>
    <?php echo $modelesView->getConfirmacion('modalEliminarContacto', 'eliminarContacto.php', 'contactoForm'); ?>


    <script src="js/contactos.js"></script>
</body>

</html>