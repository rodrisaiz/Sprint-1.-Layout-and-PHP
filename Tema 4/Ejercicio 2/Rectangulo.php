<?php
require_once('Shape.php');


Class Rectangulo extends Shape {
     
  public function calcularArea() {
  
    $area =  $this->ancho * $this->alto;

    return $area;
  }

}
?>



