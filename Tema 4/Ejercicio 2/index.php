<?php

//Set valores (ancho / alto ).

require_once('shape.php');

$obj1 = new Shape();

$ancho = 50; 
$alto = 20; 

//Area triangulo.

require_once('Triangulo.php');

$obj = new Triangulo();

echo " <br> El area del triangulo es: " . $obj-> calcularAreaTriangulo($ancho,$alto);


//Area rectangulo.

require_once('Rectangulo.php');

$obj = new Rectangulo();

echo " <br> El area del rectangulo es: " . $obj-> calcularAreaRectangulo($ancho,$alto);


?>



