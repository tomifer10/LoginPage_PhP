<?php 

    // SWITCH

    $mes= 'Diciembre';

    //recibe una variable sin condicional
    switch($mes) {
        case'Diciembre'; // en el caso que lo encuentre, ejecuta las intrucciones
        echo 'Feliz Navidad';
        // instrucciones
        break; //ponerla a final de cada caso, sino va a seguir buscando sin parar.
        case'Enero';
        echo 'Feliz Año Nuevo';
        break;

        default: //en caso de que ninguno de los casos anteriores sea exitoso
            echo "En este mes no se celebra nada";
            break;
    
    }

?>