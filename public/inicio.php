<?php
require '../models/db/ejemploDb.php';
require '../models/queries/contactosQuery.php';
require '../models/entity/contacto.php';
require '../controllers/contactosController.php';
require '../views/contactosView.php';

use App\views\ContactosView;

$contactosViews = new ContactosView();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de contactos</title>
    <link rel="stylesheet" href="css/contactos.css">
</head>

<body>
    <header>
        <h1>Lista de contactos</h1>
    </header>
    <section>
        <br>
        <?php echo $contactosViews->tablaContactos(); ?>
        <br>
    </section>
</body>

</html>