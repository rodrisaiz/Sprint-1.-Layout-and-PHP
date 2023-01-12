<?php

require_once('Shape.php');

class Triangulo extends Shape{

  public function calcularArea() {
  
    $area =  ($this->ancho * $this->alto) / 2;

    return $area;
  }

}

?>



