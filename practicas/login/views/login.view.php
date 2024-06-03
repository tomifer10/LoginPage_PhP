<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar Sesion</title>
</head>
<body>
    <h1 class="title">Iniciar Sesion</h1>
    <hr class="border">

    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']);  ?>"
    method="POST" class="form_style" name="login">
    <p>icono</p>
    <input type="text" name="user" class="user" placeholder="User">
    <p>icono</p>
    <input type="password" name="password" class="password" placeholder="Password">
    <button class="submit" onclick="login.submit()"> SEND DATOS</button>
</form>
<p>Aun no tienes cuenta?</p>
<a href="login.php">Login</a>
</body>
</html>