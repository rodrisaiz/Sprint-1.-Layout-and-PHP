<?php

require_once('employee.php');

$empleado= new Employee();

 $nombre = "Juan";
 $sueldo = 7500;

$empleado->print($nombre, $sueldo);

?>

