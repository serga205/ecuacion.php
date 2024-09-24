<?php
function resolverEcuacionSegundoGrado($a, $b, $c) {
    // Verificamos si 'a' es diferente de 0, ya que si es 0, no sería una ecuación cuadrática
    if ($a == 0) {
        echo "El valor de 'a' no puede ser 0, ya que no sería una ecuación de segundo grado.";
        return;
    }

    // Calculamos el discriminante (b^2 - 4ac)
    $discriminante = ($b * $b) - (4 * $a * $c);

    // Si el discriminante es negativo, no existen soluciones reales
    if ($discriminante < 0) {
        echo "Error: La ecuación no tiene soluciones reales.";
    } else {
        // Si el discriminante es 0 o positivo, calculamos las soluciones
        $solucion1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $solucion2 = (-$b - sqrt($discriminante)) / (2 * $a);

        if ($discriminante == 0) {
            // Si el discriminante es 0, las dos soluciones son iguales
            echo "La ecuación tiene una solución doble: x = " . $solucion1;
        } else {
            // Si el discriminante es positivo, hay dos soluciones distintas
            echo "La ecuación tiene dos soluciones: x1 = " . $solucion1 . " y x2 = " . $solucion2;
        }
    }
}

// Ejemplo de uso:
$a = 1;  // Coeficiente de x^2
$b = -3; // Coeficiente de x
$c = 2;  // Término independiente

resolverEcuacionSegundoGrado($a, $b, $c);
?>
