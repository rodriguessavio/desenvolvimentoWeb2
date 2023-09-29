<?php
    $string = "ai dento";

    //Passa a string para upper case
    echo strtoupper($string);
    echo "<br>";
    //Passa a string para lower case
    echo strtolower($string);
    echo "<br>";
    //Passa a primeira letra da string para upper case
    echo ucfirst($string);
    echo "<br>";
    // retorna o tamanho da string
    echo strlen($string);
    echo "<br>";
    //Substitui um pedaço da string por outra informada
    echo str_replace("den", "vasco", $string);
    echo "<br>";
    //Pega uma informação inicial, e passa-se a quantidade de caracteres
    echo substr($string, 0, 5);
    

?>