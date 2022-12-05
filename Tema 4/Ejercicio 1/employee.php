
<?php

class Employee {


    // Atributos
    public $nombre;
    public $sueldo;

    // Constructor

    function _construct($nombre, $sueldo) {
			
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    
    // Metodo general 

    public function print($nombre, $sueldo){
        
        define("BASEIMPUESTO",6000);
        
        
            if ($this -> sueldo >= BASEIMPUESTO){
        
                print  "<br>" . $this  -> nombre  . " debe pagar impuesto."; 
                    
            }else{
        
                print  "<br>" . $this -> nombre  . " no debe pagar impuesto."; 
                
        }   
        
    }

    
  }

?>
