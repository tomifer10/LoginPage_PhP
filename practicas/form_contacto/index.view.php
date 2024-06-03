<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-shape">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" class="form-space" name="name" placeholder="name" id="name">

        <input type="text" class="form-space" name="email" placeholder="email" id="email">

        <textarea name="message" class="form-space" id="message" placeholder= "message"></textarea>

        <?php if(!empty($errores)):?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>
        <?php elseif($sent): ?>
            <div class="alert succes">
                <p>Succesfully sent!</p>
            </div>
        <?php endif ?>

        <input type="submit" name="submit" class="btn" value="Send">
        </form>
    </div>
</body>
</html>