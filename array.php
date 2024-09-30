<?php
function filtrarMenoresQueLimite($array, $limite) {
    $resultado = [];

    foreach ($array as $numero) {
        if ($numero < $limite) {
            $resultado[] = $numero; // Añadir a resultado si es menor que el límite
        }
    }

    return $resultado;
}

// Ejemplo de uso
$arrayOriginal = [1, 5, 8, 12, 4, 9];
$limite = 6;
$arrayFiltrado = filtrarMenoresQueLimite($arrayOriginal, $limite);

echo "Elementos menores que $limite: " . implode(", ", $arrayFiltrado);
?>
