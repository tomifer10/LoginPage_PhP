<?php 

try{
    //probar codigo
    $connect = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');

    //METODO QUERY
    // $resultados = $connect->query('SELECT * FROM usuarios');

    // foreach($resultados as $fila) {
    //     echo $fila['nombre'];
    // }

    //PREPARED STATEMENTS
    $statement = $connect->prepare('SELECT * FROM usuarios');
    $statement->execute();

    $resultado = $statement->fetch();
    echo $resultado;


} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    //mostrar error
};

?>