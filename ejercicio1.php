<?php
/* Determinar la variable mayor, la del medio y la menor.
Identificar si las tres son iguales o si dos son iguales y la tercera es mayor/menor.*/

// Declaracion e inicializacinn de las tres variables numericas a comparar
$a = 15;
$b = 20;
$c = 15;

// Muestra los valores de entrada en pantalla concatenando con el operador punto (.)
echo "Valores: A = " . $a . ", B = " . $b . ", C = " . $c . "<br><br>";

// Evaluamos con condicionales if / elseif / else
if ($a == $b && $b == $c) {
    // Si la condición es verdadera, significa que A, B y C tienen el mismo valor
    echo "Todas las variables son iguales.";

} elseif ($a == $b) {
    // Si A y B son iguales, se evalua el valor de C con un condicional anidado
    if ($c > $a) {
        echo "Hay dos variables iguales (" . $a . ") y la otra es mayor (" . $c . ").";
    } else {
        echo "Hay dos variables iguales (" . $a . ") y la otra es menor (" . $c . ").";
    }

} elseif ($a == $c) {
    // Si A y C son iguales, se evalua el valor de B
    if ($b > $a) {
        echo "Hay dos variables iguales (" . $a . ") y la otra es mayor (" . $b . ").";
    } else {
        echo "Hay dos variables iguales (" . $a . ") y la otra es menor (" . $b . ").";
    }

} elseif ($b == $c) {
    // Si B y C son iguales, se evalua el valor de A
    if ($a > $b) {
        echo "Hay dos variables iguales (" . $b . ") y la otra es mayor (" . $a . ").";
    } else {
        echo "Hay dos variables iguales (" . $b . ") y la otra es menor (" . $a . ").";
    }

} else {
    // Bloque que se ejecuta cuando las tres variables tienen valores totalmente distintos
    if ($a > $b && $a > $c) {
        // A es la mayor
        $mayor = $a;
        if ($b > $c) { 
            $medio = $b; 
            $menor = $c; 
        } else { 
            $medio = $c; 
            $menor = $b; 
        }
    } elseif ($b > $a && $b > $c) {
        // B es la mayor
        $mayor = $b;
        if ($a > $c) { 
            $medio = $a; 
            $menor = $c; 
        } else { 
            $medio = $c; 
            $menor = $a; 
        }
    } else {
        // C es la mayor
        $mayor = $c;
        if ($a > $b) { 
            $medio = $a; 
            $menor = $b; 
        } else { 
            $medio = $b; 
            $menor = $a; 
        }
    }

    // Impresion del ordenamiento obtenido
    echo "La variable mayor es: " . $mayor . "<br>";
    echo "La variable del medio es: " . $medio . "<br>";
    echo "La variable menor es: " . $menor . "<br>";
}