<?php

/*- Exercici 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.



Crea la clase PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.

Crea el método throw que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto al que se le aplica el método.

Crea también el método shapeName, que diga cuál es la figura que ha salido en el último tirón del dado en cuestión.

Realiza una aplicación que permita echar cinco dados de póquer a la vez.

Además, programa el método getTotalThrows que debe mostrar el número total de tiradas entre todos los dados.
 */









enum CaraDado: String
{

    case Cara_1 = "As";
    case Cara_2 = "K";
    case Cara_3 = "Q";
    case Cara_4 = "j";
    case Cara_5 = "7";
    case Cara_6 = "8";



}


class Counter{

    public $counter;

    public function __construct(){

        $this->counter = 0;

    }


    public function add($number){

        $added = $this->counter += $number;
    }

    public function totalThrows(){

        return $this->counter;
    }

}


class PokerDice{

    public $counterDice;

    public function __construct(){

        $this->counterDice =  new Counter();

    }

    public function throw(){

        $numero = rand(1,6);
        return $numero;
        

    }



    public function shapeName($num){

        switch ($num ) {

            case 1:
                $val = CaraDado::Cara_1  ;
                break;

            case 2:
                $val = CaraDado::Cara_2  ;
                break;

            case 3:
                $val = CaraDado::Cara_3  ;
                break;

            case 4:
                $val = CaraDado::Cara_4  ;
                break;

            case 5:
                $val = CaraDado::Cara_5  ;
                break;
            
            case 6:
                $val = CaraDado::Cara_6  ;
                break; 
            
        }

       return $val->value;

    }


}

class DiceTable{

    public $dice1;
   

    public function __construct($dice1){

        $this->dice1 =  $dice1;

    }


    public function fiveByOne(){

        $value1 = $this->dice1->shapeName($this->dice1->throw());
        $value2 = $this->dice1->shapeName($this->dice1->throw());
        $value3 = $this->dice1->shapeName($this->dice1->throw());
        $value4 = $this->dice1->shapeName($this->dice1->throw());
        $value5 = $this->dice1->shapeName($this->dice1->throw());
    
        $this->dice1->counterDice->add(5);



        echo $value1;
        echo "<br>";
        echo "<br>";

        echo $value2;
        echo "<br>";
        echo "<br>";

        echo $value3;
        echo "<br>";
        echo "<br>";

        echo $value4;
        echo "<br>";
        echo "<br>";

        echo $value5;
        echo "<br>";
        echo "<br>";

    }


    public function getTotalThrows(){

    

        return  $this->dice1->counterDice->totalThrows();    
    }


}


$dice1 = new PokerDice;

$diceTable1 = new DiceTable($dice1);

$diceTable1->fiveByOne();
$diceTable1->fiveByOne();



echo $diceTable1->getTotalThrows();


