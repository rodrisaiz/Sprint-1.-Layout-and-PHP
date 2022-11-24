<?php

//Set valores (ancho / alto ).

require_once('shape.php');

$shape = new Shape();

$ancho = 50; 
$alto = 20; 

//Area triangulo.

require_once('Triangulo.php');

$triangulo = new Triangulo();

echo " <br> El area del triangulo es: " . $triangulo-> calcularArea($ancho,$alto);


//Area rectangulo.

require_once('Rectangulo.php');

$rectangulo = new Rectangulo();

echo " <br> El area del rectangulo es: " . $rectangulo-> calcularArea($ancho,$alto);


?>



