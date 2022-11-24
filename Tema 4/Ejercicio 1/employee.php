
<?php

class Employee {


    // Atributos
    public $nombre;
    public $sueldo;

    // Constructor

    function _construct($nombre, $sueldo) {
			
        $this->nombre  = $nombre;
        $this->sueldo  = $sueldo;
    }

    //Getters
    

    function get_nombre() {
        return $this->$nombre;
      }
    
    function get_sueldo() {
        return $this->$sueldo;
      }

    // Setters 


    function set_nombre($nombre) {
      $this->$nombre = $nombre;
    }

    function set_sueldo($sueldo) {
        $this->$sueldo = $sueldo;
      }

    // Metodo general 

    public function print($nombre,$sueldo){
        
        define("BASEIMPUESTO",6000);
        
        
            if ($nombre >= BASEIMPUESTO){
        
                return  "<br>" . $nombre . " debe pagar impuesto."; 
                    
            }else{
        
                return  "<br>" . $nombre . " no debe pagar impuesto."; 
                
        }   
        
    }

    
  }

?>
