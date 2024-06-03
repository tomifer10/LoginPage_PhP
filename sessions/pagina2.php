<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>
    <h1>Hola, <?php echo $_SESSION['nombre']; ?></h1>
    <a href="cerrar.php">Cerrar sesion</a>
</body>
</html>