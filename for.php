<?php
//FOR

// for($i = 1 ; $i <= 100 ; $i++ ){
//     echo $i . "<br />";
// }

//WHILE

// $x = 1;

// while($x <= 10) {
//     echo $x . '<br />';

//     $x++;
// }

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// for($i = 0; $i < count($meses); $i++){
//     echo $meses[$i] . '<br />';
// }

// $contador = 0;
// while($contador > count($meses)){
//     echo $meses[$contador];

//     $contador++;
// }

// $i = 1;

// do {
//     //instrucciones
//     echo $i . '<br />';
//     $i++;
// } while ($i <10);

//FOREACH
//se va a ejecutar mientras haya elementos que recorrer en el Array
// $meses = array(
//     'Enero', 'Febrero', 'Marzo', 'Abril',
//     'Mayo', 'Junio', 'Julio', 'Agosto',
//     'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
// );

// $amigo = array('telefono' => 4253219, 'edad' => 30, 'pais' => "Argentina");

// $paises = array('Argentina' , 'España', 'Tailandia', 'Reino unido');

// foreach($paises as $pais){
//     echo $pais . '</br>';

//     if($pais == 'España') {
//         break;
//     };
// };


?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php
            // foreach($meses as $mes){
            //     echo '<li>' . $mes .  '</li>';
            // }
                foreach($amigo as $dato => $valor) {
                        echo '<li>'. $dato . ':'. $valor . '</li>';
                }

        ?>
    </ul>
</body>
</html> -->