<?php

// ARRAYS INDEXADOS
//asi se declaran los array
// $semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
// $semana2 = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];

// //asi accedemos a los valores del array
// //echo $semana[0];

// // $semana[7] = 'Osvaldo';

// // echo $semana[7];

// // para concatenar con espacios podemos hacerlo de esta manera

// echo $semana[0] . '<br />';
// echo $semana[1] . '<br />';
// echo $semana[2] . '<br />';

//ARRAY ASOCIATIVO
// $alex = array('telefono' => 66359, 'edad' => 30, 'apellido' => 'Fernandez', 'pais' => 'Argentina');

// echo $alex['edad']

//ARRAY MULTIDIMENSIONALES
// $amigos = array(
//     array('Mante', 30), 
//     array('seba', 35)
// );

// //Accedemos al array, y luego al elemento que queremos del array
// echo $amigos[0][0] . '<br />';
// echo $amigos[1][0]

// CONTAR ELEMENTOS EN UN ARRAY
 $meses = array(
    'enero', 'febrero', 'marzo', 'abril',
    'mayo', 'junio' , 'julio', 'agosto',
    'septiembre', 'octubre', 'noviembre', 'diciembre'
 );

 //echo count($meses);

//  echo $ultimo_mes = count($meses) - 1;
//  echo $meses[$ultimo_mes];

//ORDENAR ARRAYS ALFABETICAMENTE
//sort($meses)
//ORDENAR A LA INVERSA
rsort($meses)


?>

<!-- RECORRER CON FOR EACH -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>

  
       <?php
        
        foreach($meses as $mes){
            //Por cada mes, aqui ejecutas esto:
            echo '<li>' . $mes . '</li>';
        }

        ?>
 


    </ul>
</body>
</html>