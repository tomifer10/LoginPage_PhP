<?php

if($_POST){
    echo $_POST['nombre'];
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- en ACTION le decimos donde queremos enviar la info -->
    <!-- en METHOD es el metodo de envio puede recibir POST o GET -->
    <!-- el VALUE es lo que vamos a estar enviando con PHP -->
    <!-- con el NAME es lo que vamos a estar accediendo -->

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method='post'>
        <input type="text" placeholder='Nombre:' name="nombre">
        <br>
        <label for="hombre">Hombre</label>
        <input type="radio" name='sexo' value='hombre' id='hombre'>

        <label for="mujer">Mujer</label>
        <input type="radio" name='sexo' value='mujer' id='mujer'>
        <br>
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2001">2001</option>
            <option value="2002">2002</option>
        </select>
        <br>
        <label for="terminos">Acepta los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>
            



        <input type="submit" value="enviar">
    </form>

</body>
</html>