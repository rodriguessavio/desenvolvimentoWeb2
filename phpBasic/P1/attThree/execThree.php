<?php
    $chico_altura = 1.50;
    $ze_altura = 1.10;
    $anos = 0;

    while ($ze_altura <= $chico_altura) {
        $chico_altura += 0.02;  
        $ze_altura += 0.03;  
        $anos++;
    }

    echo "Serão necessários $anos anos para que Zé seja maior que Chico.";
?>
