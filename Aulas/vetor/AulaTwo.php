<?php
    $frutas = array();
    $frutas = array(1 => "maça", 2 => "uva", 3 => "alcerola", 4 => "manga");

    print_r($frutas);

    //Listas são utilizadas para atribuições múltiplas
    list($a, $b, $c) = array("a", "b", "c");
    echo "</br>";
    echo "</br>";
    echo $b;


    $arr = array(0 => "zero", 1 => "um" , 3 => "tres", "a" => "letraA" , 2 => "dois");
    echo "</br>";
    print_r($arr);

    echo "</br>";
    list($a,$b,$c,$d) = $arr; 

    echo $a;

?>