<?php
    $n = 4;

    if ($n >= 2 && $n <= 20) {
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "<br>";
        }
        for ($i = $n - 1; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j;
            }
            echo "<br>";
        }
    } else {
        echo "Número fora do intervalo permitido.";
    }
?>
