<?php
    //Quando ocorrem determinadas operações entre dois valores de tipos diferentes, o PHP converte o valor de um deles automaticamente (coerção). 
    // Ex:
    $php = "1"; // $php é a string “1”
    $php = $php + 1; // $php é o integer 2
    $php = $php + 3.7;// $php é o double 5.7
    $php = 1 + 1.5; // $php é o double 2.5 

    // É analisado o início da string. Se contiver um número, ele será avaliado. Senão, o
    // valor será 0 (zero); • O número pode conter um sinal no início (“+” ou “-“);

    // • Se a string contiver um ponto em sua parte numérica a ser analisada, ele será
    // considerado, e o valor obtido será double;
    // • Se a string contiver um “e” ou “E” em sua parte numérica a ser analisada, o valor
    //se guinte será considerado como expoente da base 10, e o valor obtido será double; 

    //typecast é para alterar o tipo de uma variavel manualmente, ex:
    $php = (int) $php;


    match (true) {
         $php > 10 => "vasco",
         default => "flamengo"
    };


    $idade = 19;

    // $status = ($idade >= 18)? "maior de idade" : "menor de idade";

    if($idade >= 18):
        $status = "maior de idade";
    else:
        $status = "menor de idade";
    endif;

    echo $status;
?>