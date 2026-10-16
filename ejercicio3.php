<?php
/* Declarar variables de tipo integer, double, string y boolea
 y luego imprimirlas integradas dentro de una frase.*/

// Declaracion de variables de diferentes tipos de datos
$edad = 22;               // Tipo INTEGER (entero)
$promedio = 4.5;          // Tipo DOUBLE / FLOAT (numero con decimales)
$nombre = "Deimar";       // Tipo STRING (cadena de texto)
$autenticado = true;      // Tipo BOOLEAN (booleano: verdadero/falso)

// Impresion concatenada de la cadena usando el operador punto (.)
echo "Hola, mi nombre es " . $nombre . ", tengo " . $edad . " años, mi promedio es " . $promedio . " y mi estado de autenticación es: ";

// Se usa var_dump para visualizar la representacion real del booleano (bool(true))
var_dump($autenticado);
?>