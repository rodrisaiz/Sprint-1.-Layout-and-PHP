<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php

echo '<h2>' . "Exercici 1 " .  '</h2>';

    $num1 = 34;

    function pair($num1) {

        if($num1 % 2 == 0) {
            echo 'Tu numero es par.';

        } else {

            echo 'Tu numero es impar.';
        }
        
    }
    
    pair($num1); 

echo '<h2>' . "Exercici 2 " .  '</h2>';


    function amagatall(){

    for ($i = 0; $i <= 10; $i += 2 ) {
        echo $i . "<br>";
    }
    }

    amagatall();

echo '<h2>' . "Exercici 3 " .  '</h2>';

    $end = 25;


    function amagatall2($end){

        for ($i = 0; $i <= $end; $i += 2 ) {
            echo $i . "<br>";
        }
        }
        
        amagatall2($end);

echo '<h2>' . "Exercici 4 " .  '</h2>';

    $end = 4;


    function amagatall3($end){

    
        if ($end >= 1){
        
            for ($i = 0; $i <= $end; $i += 2 ){
            echo $i . "<br>";
            }
        }else{

            $end = 10;

            for ($i = 0; $i <= $end; $i += 2 ) {
            echo $i . "<br>";
            }
        }
        }
    amagatall3($end);

echo '<h2>' . "Exercici 5 " .  '</h2>';

$nota = 82;

function student($nota){

    if($nota >= 60){

        echo "El estudiante pertenece a la primera divicion";

    }elseif(($nota >= 45) && ($nota <= 59)){

        echo "El estudiante pertenece a la segunda divicion";

    }elseif(($nota >= 33) && ($nota <= 44)){

        echo "El estudiante pertenece a la tercera divicion";
        
    }else{

        echo "El estudiante a reprobado";

    }
}

student($nota);


echo '<h2>' . "Exercici 6 " .  '</h2>';

$bite = rand(0,1);

function isBitten($bite){
    
 echo $bite >= 1 ? "TRUE" : "FALSE";

}

isBitten($bite);

?>
    
</body>
</html>