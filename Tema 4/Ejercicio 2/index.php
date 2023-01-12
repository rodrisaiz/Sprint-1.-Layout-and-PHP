<?php

    //Area triangulo.

    require_once('Triangulo.php');

        $triangulo1 = new Triangulo(50, 20);


        echo " <br> El area del triangulo es: " . $triangulo1-> calcularArea();


    //Area rectangulo.

    require_once('Rectangulo.php');

    $rectangulo1 = new Rectangulo(50, 20);
    echo " <br> El area del rectangulo es: " . $rectangulo1-> calcularArea();

?>



