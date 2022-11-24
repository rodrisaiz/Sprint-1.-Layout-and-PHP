
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

    //Getters
    
    function get_ancho() {
        return $this->$ancho;
      }
    
    function get_alto() {
        return $this->$alto;
      }

    // Setters 

   
    function set_ancho($ancho) {
      $this->$ancho = $ancho;
    }

    function set_alto($alto) {
        $this->$alto = $alto;
      }

    // Metodo general 

    public function calcularArea($ancho,$alto){
        
        $area = $ancho * $alto;
        
        return $area;
                
        }   
        
}

    


?>



