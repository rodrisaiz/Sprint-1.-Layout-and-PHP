
<?php

class Shape{


    // Atributos
    public $ancho;
    public $alto;

    // Constructor

    function _construct($ancho, $alto) {
			
        $this->ancho = $ancho;
        $this->alto = $alto;
    }


    // Metodo general 

    abstract public function calcularArea($ancho,$alto){
        
                
        }   
        
}

    


?>



