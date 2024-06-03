<?php  

// con el isset estamos preguntando si la condicion se cumple

$edad = (isset($edad)) ? $edad : 'El usuario no establecio edad' ;

echo 'Edad ' . $edad;

// Isset nos va a devolver true o false si la variable ha sido seteada

// $edad= 18;
// echo isset($edad);

?>