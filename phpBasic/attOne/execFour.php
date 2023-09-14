<?php
$altura = 1.75;
$sexo = "homem"; // Ou "mulher" para calcular o peso ideal para uma mulher

if ($sexo === "homem") {
    $peso_ideal = (72.7 * $altura) - 58;
} elseif ($sexo === "mulher") {
    $peso_ideal = (62.1 * $altura) - 44.7;
} else {
    echo "Sexo inválido. Use 'homem' ou 'mulher'.";
    exit;
}

echo "O peso ideal para um $sexo com altura $altura é: " . $peso_ideal;
?>
