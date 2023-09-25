<?php
    $n = 20;

    if ($n >= 0) {
        $E = 1;
        $fatorial = 1;

        for ($i = 1; $i <= $n; $i++) {
            $fatorial *= $i;
            $E += 1 / $fatorial;
        }

        echo "O valor de E é: " . $E;
    } else {
        echo "Número inválido.";
    }
?>
