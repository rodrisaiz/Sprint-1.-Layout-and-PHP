
<?php

class Employee {


    // Atributos
    public $nombre;
    public $sueldo;

    
    // Metodo general 

    public function print($nombre,$sueldo){
        
        define("BASEIMPUESTO",6000);
        
        
            if ($nombre >= BASEIMPUESTO){
        
                print  "<br>" . $nombre . " debe pagar impuesto."; 
                    
            }else{
        
                print  "<br>" . $nombre . " no debe pagar impuesto."; 
                
        }   
        
    }

    
  }

?>
