<?php
$num = $_POST['numero'];
// $num = $_GET['numero'];
floatval('3.5');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>

<body>
    <h1>El numero ingresado es: <?php echo $num; ?></h1>
    <ul>
        <?php
        for ($i = 1; $i <= intval($num); $i++) {
            echo '<li>';
            echo "$i: " . ($i % 2 == 0 ? 'Par' : 'Impar');
            echo '</li>';
        }
        ?>
        <?php
        for ($i = 1; $i <= intval($num); $i++) {
        ?>
            <li>
                <?php echo "$i: " . ($i % 2 == 0 ? 'Par' : 'Impar'); ?>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>