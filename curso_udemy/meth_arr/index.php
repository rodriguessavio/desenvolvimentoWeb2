<?php
    // existem arrays sequenciais(numéricos) e arrays associativos
    
    //sequenciais:

    $frutas = array('Banana', 'Maça', 'morango', 'uva');

    echo "<pre>";
    
    var_dump($frutas);
    
    echo "</pre>";

    // a tag pre formata o nosso array

    //associativos:
    //Nesse caso cada elemento do vetor é associado explicitamente a um índice do vetor

    //No caso de matriz cada vetor é uma linha desse matriz

    $matriz = array(1, 2,
              array(3, 4),
              array(4, 5));

    

?>