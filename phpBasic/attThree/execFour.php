<?php
    $n = 10;

    if ($n >= 2 && $n <= 20) {
        for ($i = 1; $i <= $n; $i++) {
            echo str_repeat("x", $n - $i);
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "\n";
        }
    } else {
        echo "Número fora do intervalo permitido.";
    }
?>
