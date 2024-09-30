<?php

// Definir variables de ejemplo
$var1 = 42;
$var2 = null;
$array = ["nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid"];
$cadenas = "Hola, Mundo";
$cadenaArray = "uno,dos,tres,cuatro";

// Funciones de variables
echo "isset(\$var1): " . (isset($var1) ? 'TRUE' : 'FALSE') . "<br>"; // Verifica si la variable está inicializada y no es NULL
echo "is_null(\$var2): " . (is_null($var2) ? 'TRUE' : 'FALSE') . "<br>"; // Verifica si la variable es NULL
echo "empty(\$var2): " . (empty($var2) ? 'TRUE' : 'FALSE') . "<br>"; // Verifica si la variable está vacía o es FALSE

// Comprobar tipo de dato
echo "is_int(\$var1): " . (is_int($var1) ? 'TRUE' : 'FALSE') . "<br>"; // Verifica si es un entero
echo "is_array(\$array): " . (is_array($array) ? 'TRUE' : 'FALSE') . "<br>"; // Verifica si es un array

// Convertir tipos de datos
echo "intval(\$var1): " . intval($var1) . "<br>"; // Convertir a entero
echo "strval(\$var1): " . strval($var1) . "<br>"; // Convertir a string

// Funciones de cadenas
echo "strlen(\$cadenas): " . strlen($cadenas) . "<br>"; // Longitud de la cadena
$cadenaPartida = explode(",", $cadenaArray); // Partir la cadena
echo "explode(): <br>";
print_r($cadenaPartida); // Mostrar el array resultante
echo "<br>implode(): " . implode("-", $cadenaPartida) . "<br>"; // Juntar el array en una cadena

// Comparar cadenas
$cad1 = "Hola";
$cad2 = "hola";
echo "strcmp(\$cad1, \$cad2): " . strcmp($cad1, $cad2) . "<br>"; // Comparar cadenas
echo "strtolower(\$cad1): " . strtolower($cad1) . "<br>"; // Convertir a minúsculas
echo "strtoupper(\$cad1): " . strtoupper($cad1) . "<br>"; // Convertir a mayúsculas

// Funciones de arrays
ksort($array); // Ordenar por clave ascendente
echo "ksort(\$array): <br>";
print_r($array);
echo "<br>";

rsort($cadenaPartida); // Ordenar por valor descendente
echo "rsort(\$cadenaPartida): <br>";
print_r($cadenaPartida);
echo "<br>";

echo "count(\$array): " . count($array) . "<br>"; // Número de elementos del array
echo "array_keys(\$array): <br>";
print_r(array_keys($array)); // Mostrar claves del array
echo "<br>array_values(\$array): <br>";
print_r(array_values($array)); // Mostrar valores del array

?>
