<?php
// Definir 3 variables enteras e incorporarlas dentro de un string
//utilizando comillas dobles para que PHP las reemplace en tiempo de ejecucion.   

// Declaracion de las tres variables enteras
$numero1 = 10;
$numero2 = 25;
$numero3 = 40;

//Al encerrar la cadena entre comillas dobles (" "), el interprete de PHP 
//evalua las variables {$numero1}, {$numero2} y {$numero3} sustituyendo sus nombres
//por sus valores numrricos correspondientes durante la ejecucion.
$mensaje = "Las tres variables enteras son: {$numero1}, {$numero2} y {$numero3}.";

// Muestra el mensaje con las variables ya interpoladas
echo $mensaje;
?>