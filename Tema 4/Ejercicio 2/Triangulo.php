<?php

class Triangulo extends Shape{

// Metodo general 

public function calcularAreaTriangulo ($ancho,$alto){
        
    return self:: calcularArea($ancho,$alto) / 2 ;
    
    
            
    }   

}

?>



