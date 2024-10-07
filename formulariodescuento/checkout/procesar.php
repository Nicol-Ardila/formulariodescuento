<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $valor = $_POST['valor'];
    $edad = $_POST['edad'];

    // Validaciones básicas
    if ($valor > 0 && $edad > 0) {
        // Verificar si la persona tiene más de 60 años para aplicar el descuento
        if ($edad > 60) {
            $descuento = $valor * 0.20; // 20% de descuento
            $valor_final = $valor - $descuento;
            echo "<h2>¡Descuento aplicado!</h2>";
            echo "El valor original era: $$valor<br>";
            echo "Descuento del 20%: $$descuento<br>";
            echo "Valor final a pagar: $$valor_final<br>";
        } else {
            echo "<h2>No se aplica descuento</h2>";
            echo "El valor a pagar es: $$valor<br>";
        }
    } else {
        echo "<h2>Error en los datos</h2>";
        echo "El valor y la edad deben ser mayores que 0.";
    }
} else {
    echo "<h2>Acceso no permitido</h2>";
}
?>
