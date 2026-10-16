<?php
//  Generar un entero aleatorio entre 20 y 25, y mostrar su nombr
//  en espanol comparando su valor mediante la condicion ( $valor == X ).

// Genera un numero aleatorio unicamente entre el rango acotado de 20 a 25
$valor = rand(20, 25);

// Impresion del numero generado en su representacion numerica
echo "Numero generado: " . $valor . "<br>";
echo "Texto en espanol: ";

// Evaluacion de la variable mediante la estructura condicional multiple (if - elseif)
if ($valor == 20) {
    echo "Veinte";
} elseif ($valor == 21) {
    echo "Veintiuno";
} elseif ($valor == 22) {
    echo "Veintidos";
} elseif ($valor == 23) {
    echo "Veintitres";
} elseif ($valor == 24) {
    echo "Veinticuatro";
} elseif ($valor == 25) {
    echo "Veinticinco";
}