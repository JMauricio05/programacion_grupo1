<?php
$num = empty($_POST['numero'])?0:$_POST['numero'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="inicio.php" method="post">
        <div>
            <label>Ingrese el numero:</label>
            <input type="number" name="numero">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>

</html>