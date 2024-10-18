<?php
require '../models/db/ejemploDb.php';
require '../models/queries/contactosQuery.php';
require '../models/entity/contacto.php';
require '../controllers/contactosController.php';

use App\controllers\ContactosController;

$titulo = empty($_GET['cod'])?'Crear contacto':'Modificar contacto';
$nombre = '';
$telefono = '';
$email ='';
if(!empty($_GET['cod'])){
    $controller = new ContactosController();
    $contacto = $controller->getContacto($_GET['cod']);
    $nombre = $contacto->get('nombre');
    $telefono = $contacto->get('telefono');
    $email = $contacto->get('email');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
</head>
<body>
    <h1><?php echo $titulo; ?></h1>
    <section>
        <form action="confirmarContacto.php" method="post">
            <?php
            if(!empty($_GET['cod'])){
                echo '<input type="hidden" name="cod" value="'.$_GET['cod'].'">';
            }
            ?>
            <div>
                <label>Nombre</label>
                <input type="text" name="nombre" value="<?php echo $nombre?>" required>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email?>" required>
            </div>
            <div>
                <label>Telefono</label>
                <input type="text" name="telefono" value="<?php echo $telefono?>" required>
            </div>
            <div>
                <button type="submit">Guardar</button>
            </div>
        </form>
    </section>
</body>
</html>