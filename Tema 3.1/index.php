<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

echo '<h2>' . "Exercici 1 " .  '</h2>';

    $variable1 = 12; //integer
    $variable2 = 10.5; //double
    $variable3 = "Hello world"; //string
    $variable4 = true; //boolean

    echo "La variable integer es: " . $variable1 . "<br>"; 
    echo "La variable double es: " . $variable2 . "<br>";
    echo "La variable string es: " . $variable3 . "<br>";
    echo "Por ultimo la variable boolean es: " . $variable4. "<br> <br>";

echo '<h2>' . "Exercici 2 " .  '</h2>';


    $variable5 = 'Hello world';

    echo "<br>" . $variable5 . "<br>";



    echo  "El largo del string es: " . strlen($variable5) . "<br>" ;

    echo "Y el string al reves es: " . strrev($variable5) . "<br>" ;

    $variable6 = "Aquest és el curs de PHP";

    echo "<br>"  . $variable6 ." : " . $variable5;

echo '<h2>' . "Exercici 3 " .  '</h2>';

    define( "nombre", "Rodri Saiz");

    echo '<h1>' . nombre .  '</h1>';

echo '<h2>' . "Exercici 4 " .  '</h2>';

    $X = 25;
    $Y = 5;
    $N = 12.5;
    $M = 13.33;

    echo "La suma de ". $X . " y " . $Y . " es : " . $X + $Y . "<br>";
    echo "La resta de ". $X . " y " . $Y . " es : " . $X - $Y . "<br>";
    echo "La multiplicacion de ". $X . " y " . $Y . " es : " . $X * $Y . "<br>";
    echo "La division de ". $X . " y " . $Y . " es : " . $X / $Y . "<br>";

    echo "<br> El doble de todas las variables es: <br>";
    echo $X * 2 . "<br>"; 
    echo $Y * 2 . "<br>";
    echo $N * 2 . "<br>";
    echo $M * 2 . "<br>";

    $numbers = array($X,$Y,$N,$M);

    echo "<br> La suma de todas las variables es: <br>";
    echo array_sum($numbers) . "<br>";

    echo "<br> La multiplicacion de todas las variables es: <br>";
    echo array_product($numbers) . "<br>";

echo '<h2>' . "Exercici 5 " .  '</h2>';

    $num1 = array(16,21,30,42,50);
    $num2 = array(8,20,52);

    array_push($num2, 84);

    $num3 = array_merge($num1, $num2);

    echo "La medida del array es de: " . count($num3) . " elementos.";
    echo "<br>";
    print_r ($num3);

?>
    
</body>
</html>