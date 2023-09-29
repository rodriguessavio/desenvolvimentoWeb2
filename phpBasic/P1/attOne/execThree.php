<?php
$salario = 250;

if ($salario <= 300) {
    $reajuste = $salario * 0.5;
} else {
    $reajuste = $salario * 0.3;
}

$novo_salario = $salario + $reajuste;

echo "O salário reajustado é: " . $novo_salario;
?>
