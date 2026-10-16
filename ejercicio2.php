<?php
/* Utilizar rand() para obtener un numero entre 1 y 100,
mostrarlo en pantalla e indicar si es <= 50 o mayor.*/

// Se genera un numero entero aleatorio entre el rango de 1 a 100
$numero = rand(1, 100);

// Muestra en pantalla el numero que se genero aleatoriamente
echo "El valor generado es: " . $numero . "<br>";

// Condicional para verificar el rango del numero generado
if ($numero <= 50) {
    // Se ejecuta si el numero es menor o igual a 50
    echo "El numero es menor o igual a 50.<br>";
} else {
    // Se ejecuta si el numero es estrictamente mayor a 50
    echo "El numero es mayor a 50.<br>";
}

// Depuracion e inspeccion del tipo de dato e informacion de la variable
var_dump($numero);
