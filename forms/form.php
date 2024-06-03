<?php
 
 $errores = '';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (!empty($name)) {
        // $name = trim($name);
        // $name = htmlspecialchars($name);
        // $name = stripslashes($name);

        $name = filter_var($name, FILTER_SANITIZE_STRING);
        echo "Tu nombre es: $name <br />";
    } else {
        $errores .= 'Por favor agrega un nombre';
    }
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo valido <br />';
        };
        echo "Tu correo es: $email";
    } else {
        $errores .= 'Por favor agrega un email';
    }

    
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <input type="text" name="name" placeholder="nombre">
        <input type="email" name="email" placeholder ="correo">

        <?php if(!empty($errores)) : ?>;
            <div class="error"> <?php echo $errores; ?></div>
        <?php endif; ?>;
        <input type="submit" name="submit">
    </form>
</body>
</html>
