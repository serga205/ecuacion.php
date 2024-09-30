<?php
function resolverEcuacionSegundoGrado($a, $b, $c) {
    if ($a == 0) {
        throw new InvalidArgumentException("El coeficiente 'a' no puede ser cero en una ecuación de segundo grado.");
    }

    $discriminante = $b * $b - 4 * $a * $c;

    if ($discriminante < 0) {
        return false; // No hay soluciones reales
    } elseif ($discriminante == 0) {
        // Una solución real
        $x = -$b / (2 * $a);
        return [$x];
    } else {
        // Dos soluciones reales
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
        return [$x1, $x2];
    }
}

// Ejemplo de uso
try {
    $soluciones = resolverEcuacionSegundoGrado(1, -3, 2);
    if ($soluciones === false) {
        echo "No hay soluciones reales.";
    } else {
        echo "Las soluciones son: " . implode(", ", $soluciones);
    }
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
?>
