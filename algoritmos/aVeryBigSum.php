<?php
    function aVerybigSum($ar) {
        $value = 0;
        foreach ($ar as $key){
            $value += $key;
        }

        echo $value;
    }

    $ar = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];
    // lembrando que os valores são recebidos por input sepados por espaço
    aVerybigSum($ar)
?>