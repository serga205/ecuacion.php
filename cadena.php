<?php
function esPalindromo($cadena) {
    // Eliminar espacios y convertir a minúsculas
    $cadena = strtolower(preg_replace('/\s+/', '', $cadena));
    
    // Eliminar caracteres no alfanuméricos
    $cadena = preg_replace('/[^a-z0-9]/', '', $cadena);
    
    // Comparar la cadena original con su reverso
    return $cadena === strrev($cadena);
}

// Ejemplo de uso
$frase = "Anita lava la tina";
if (esPalindromo($frase)) {
    echo "'$frase' es un palíndromo.";
} else {
    echo "'$frase' no es un palíndromo.";
}
?>
