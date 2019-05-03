<?php
    //Código imperativo o espaguetti

    $automovil_1=(object)['marca'=>'Chevrolet','modelo'=>'Chevy'];
    $automovil_2=(object)['marca'=>'Ford','modelo'=>'Lobo'];
    $automovil_3=(object)['marca'=>'Honda','modelo'=>'CRV'];

    //Función con parámetros para imprimir determinado automovil
    function mostrar($automovil){
        echo "<p>Hola soy un $automovil->marca, marca $automovil->modelo </p>";
    }

    mostrar($automovil_1);
?>